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

class Product extends Model implements HasMedia
{

    use HasFactory;


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
        $this->addMediaCollection('images');
    }
    public function type()
    {
        return $this->belongsTo(ProductType::class, 'product_kind_id');
    }

    public function kinds()
    {
        return $this->belongsTo(Product_kind::class, 'product_kind_id');
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
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

    public function composite()
    {
        return $this->hasMany(Product_composite_element::class);
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

    public static function storeAnalog(Product $product, $analogs)
    {
        try {
            foreach ($analogs as $analog) {
                Analog::upsert([
                    ['product_id' => $product->id,'analog_vendor_id' =>  $analog['vendor_id'],  'name' => $analog['name'], 'article' => $analog['article']],
                ], uniqueBy: ['product_id', 'analog_vendor_id'], update: ['name', 'article']);
            }
        }
        catch (\Throwable $th) {
            throw $th;
        }
        return true;
     }

     protected function frontUrl(): Attribute
     {
         return new Attribute(
             get: fn() =>  config('app.url') . '/' . "items" . '/' . $this->id ,

         );
     }
}
