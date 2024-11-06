<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Builder;
use Gloudemans\Shoppingcart\Facades\Cart;
use Carbon\Carbon;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;
use Maize\Searchable\HasSearch;
use Gloudemans\Shoppingcart\Contracts\Buyable;

class Product extends Model implements HasMedia, Sitemapable
{

    use HasFactory;

    use HasSearch;
    use InteractsWithMedia;
    use HasSEO;
    use HasSlug;
    protected $table = 'products';
    protected $guarded = ['id'];
    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }


    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }



    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null)
    {
        return $this->description;
    }

    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        return 1; // $this->price;
    }



    /**
     * Get the weight of the Buyable item.
     *
     * @return float
     */
    public function getBuyableWeight($options = null)
    {
        return 0;
    }





    /**
     * Get the model's searchable attributes.
     *
     * @return array
     */
    public function getSearchableAttributes(): array
    {
        return [
            // 'model' => 8,
            'name' => 8, // Model attribute
            'body_description' => 4,
            'short_description' => 4, // All json keys of a model attribute
            'vendor.name' => 3, // Relationship attribute
            // 'tags.description.*', // All json keys of a relationship attribute
            // DB::raw("CONCAT(creator_name, ' ', creator_surname)"), // Raw expressions are supported too
        ];
    }


    public function toSitemapTag(): Url|string|array
    {
        // Simple return:
        // return route('blog.post.show', $this);
        // Return with fine-grained control:
        return Url::create($this->front_url)
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->nonQueued();
        // $this
        //     ->addMediaConversion('responsive')
        //     ->format('webp')
        //     ->quality(80)
        //     ->withResponsiveImages()
        //     ->nonQueued();
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
            ->useFallbackUrl('/images/default_image.jpg')
            ->useFallbackPath(public_path('/images/default_image.jpg'))
            ->useFallbackUrl('/images/default_image_thumb.jpg', 'thumb')
            ->useFallbackPath(public_path('/images/default_image_thumb.jpg'), 'thumb');

        $this->addMediaCollection(name: 'specifications')->acceptsMimeTypes(mimeTypes: ['application/pdf']);//Технические характеристики
        $this->addMediaCollection('dimensionalDrawing')->acceptsMimeTypes(mimeTypes: ['application/pdf']);//Габаритный чертеж
        $this->addMediaCollection('overviewInformation')->acceptsMimeTypes(mimeTypes: ['application/pdf']);//Обзорная информация

    }
    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    /*public function properties()
    {
        return $this->hasMany(Property::class);
    }*/
    
    public function  productPropertyValues()
    {
        return $this->hasMany(ProductPropertyValue::class, 'product_id');
    }

    public function analogies()
    {
        return $this->hasMany(Analog::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    // public function composite()
    // {
    //     return $this->hasMany(Product_composite_element::class);
    // }

    public function composite()
    {
        return $this->hasMany(ProductCompositeElement::class, 'product_id');
    }

    //к какому комплекту товар относится
    public function parentComplectation()
    {
        return $this->belongsToMany(
            Product::class, // Модель связанных товаров
            'product_composite_elements', // Таблица связи
            'product_element_id',                // Внешний ключ для текущей модели в таблице связи
            'product_id'         // Внешний ключ для связанной модели в таблице связи
        )->as('elements'); // Добавляем алиас для связи
    }

    public function complectationQuantity()
    {
        return $this->hasMany(Product_composite_element::class, 'product_element_id', 'id');
    }


    public static function getAnalogies($product): array
    {
        // Аналоги товара
        $analogies = [];
        // Получаем аналоги товара с предзагрузкой вендора
        foreach ($product->analogies()->with('vendor')->get() as $analog) {
            // Если есть имя или артикул и вендор опубликован
            if (($analog->name || $analog->article) && $analog->vendor->published) {
                // Формируем строку "название (артикул)" или просто название/артикул, если чего-то нет
                $analogies[$analog->vendor->name] = $analog->name
                    ? ($analog->article ? "$analog->name ($analog->article)" : $analog->name)
                    : $analog->article;
            }
        }
        return $analogies;
    }
    public static function storeAnalog(Product $product, $analogs)
    {
        try {
            foreach ($analogs as $analog) {
                Analog::upsert([
                    ['product_id' => $product->id, 'analog_vendor_id' => $analog['vendor_id'], 'name' => $analog['name'], 'article' => $analog['article']],
                ], uniqueBy: ['product_id', 'analog_vendor_id'], update: ['name', 'article']);
            }
        }
        catch (\Throwable $th) {
            throw $th;
        }
        return true;
    }
    public function getProperties()
    {
        // Массив характеристик
        $characteristics = [];
        // Проходимся по свойствам вида товара
        foreach ($this->properties() as $property) {
            // Если секция не равна 0, добавляем название секции
            if ($property->section != 0) {
                $characteristics["<b>" . $property->name . "</b>"] = "";
                // Иначе, если значение свойства существует, добавляем название свойства и его значение
            } else if ($property->values->where('product_id', $this->product->id)->first()?->value) {
                $characteristics[$property->name] = ": " . $property->values->where('product_id', $this->product->id)->first()->value;
            }
        }
        return $characteristics;

    }


    public function scopePublished(Builder $query): void
    {
        $query->where('published', 1);
    }

    public function scopeActive(Builder $query): void
    {
        $query->where('active', 1);
    }
    protected function frontUrl(): Attribute
    {
        return new Attribute(
             get: fn(): string => config(key: 'app.url') . "/product/" . $this->slug,

        );
    }


}
