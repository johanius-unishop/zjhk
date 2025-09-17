<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Manipulations;
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

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            foreach ($model->getFillable() as $field) {
                if (is_string($model->$field)) {
                    $model->$field = trim($model->$field);
                }
            }
        });
    }
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
            'name' => 8, // Model attribute
            'body_description' => 4,
            'short_description' => 4, // All json keys of a model attribute
            'vendor.name' => 3, // Relationship attribute
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
            ->fit(FIT::Fill, 300, 300)   // Сохраняем пропорцию, максимум ширина или высота 300px
            ->format('jpg')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('images')             // Применяется ко всей коллекции 'images'
            ->nonQueued();
        // $this
        //     ->addMediaConversion('responsive')
        //     ->format('webp')
        //     ->quality(80)
        //     ->withResponsiveImages()
        //     ->nonQueued();
        $this->addMediaConversion('webp-thumb')
            ->fit(FIT::Fill, 300, 300)   // Сохраняем пропорцию, максимум ширина или высота 300px
            ->format('webp')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('images')             // Применяется ко всей коллекции 'images'
            ->nonQueued();

        $this->addMediaConversion('small-webp')
            ->fit(FIT::FillMax, 640, 640)   // Сохраняем пропорцию, максимум ширина или высота 640px
            ->format('webp')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('images')             // Применяется ко всей коллекции 'images'
            ->nonQueued();

        $this->addMediaConversion('medium-webp')
            ->fit(FIT::FillMax, 1280, 1280)   // Сохраняем пропорцию, максимум ширина или высота 1280px
            ->format('webp')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('images')             // Применяется ко всей коллекции 'images'
            ->nonQueued();

        $this->addMediaConversion('large-webp')
            ->fit(FIT::FillMax, 2560, 2560)   // Сохраняем пропорцию, максимум ширина или высота 2560px
            ->format('webp')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('images')             // Применяется ко всей коллекции 'images'
            ->nonQueued();

        $this->addMediaConversion('small')
            ->fit(FIT::FillMax, 640, 640)   // Сохраняем пропорцию, максимум ширина или высота 640px
            ->format('jpg')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('images')             // Применяется ко всей коллекции 'images'
            ->nonQueued();

        $this->addMediaConversion('medium')
            ->fit(FIT::FillMax, 1280, 1280)   // Сохраняем пропорцию, максимум ширина или высота 1280px
            ->format('jpg')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('images')             // Применяется ко всей коллекции 'images'
            ->nonQueued();

        $this->addMediaConversion('large')
            ->fit(FIT::FillMax, 2560, 2560)   // Сохраняем пропорцию, максимум ширина или высота 2560px
            ->format('jpg')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('images')             // Применяется ко всей коллекции 'images'
            ->nonQueued();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images') //Изображения
            ->useDisk('products')
            ->withResponsiveImages()
            ->useFallbackUrl('/images/default_image.jpg')
            ->useFallbackPath(public_path('/images/default_image.jpg'))
            ->useFallbackUrl('/images/default_image_thumb.jpg', 'thumb')
            ->useFallbackPath(public_path('/images/default_image_thumb.jpg'), 'thumb');

        $this->addMediaCollection('specification') //Технические характеристики
            ->useDisk('products')
            ->acceptsMimeTypes(mimeTypes: ['application/pdf']);

        $this->addMediaCollection('dimensionalDrawing') //Габаритный чертеж
            ->useDisk('products')
            ->acceptsMimeTypes(['application/pdf']);

        $this->addMediaCollection('overviewInformation') //Обзорная информация
            ->useDisk('products')
            ->acceptsMimeTypes(['application/pdf']);

        $this->addMediaCollection('3dModel') //3D-модель
            ->useDisk('products')
            ->acceptsMimeTypes(['application/x-rar-compressed', 'application/zip', 'text/plain']);
    }


    public function  productPropertyValues()
    {
        return $this->hasMany(ProductPropertyValue::class, 'product_id');
    }

    public function analogs()
    {
        return $this->hasMany(Analog::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function composite()
    {
        return $this->hasMany(ProductCompositeElement::class, 'product_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
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


    public function getAnalogies()
    {
        // Аналоги товара
        $product = $this;
        $analogies = [];
        // Получаем аналоги товара с предзагрузкой вендора
        foreach ($this->analogs()->with('vendor')->get() as $analog) {
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
        } catch (\Throwable $th) {
            throw $th;
        }
        return true;
    }

    public function getProperties()
    {
        $productId = $this->id;

        return ProductTypeProperty::query()
            ->leftJoin('product_property_values', function ($join) use ($productId) {
                $join->on('product_type_properties.id', '=', 'product_property_values.product_type_property_id')
                    ->where('product_property_values.product_id', '=', $productId);
            })
            ->leftJoin('product_type_property_values', 'product_property_values.product_type_property_value_id', '=', 'product_type_property_values.id')
            ->where('product_type_properties.product_type_id', '=', $this->productType->id)
            ->orderBy('product_type_properties.order_column')
            ->select([
                'product_type_properties.name as characteristic_name',
                'product_type_property_values.value as characteristic_value',
                'product_type_properties.section as section',
            ])
            ->get()
            ->toArray();
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

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_compositions', 'product_id', 'order_id');
    }

    // Связь продукта со страной
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    //Формирование Alt для изображений продукта
    public function getAltAttribute()
    {
        $parts = [];

        // Добавляем тип товара, если он доступен
        if (!empty($this->productType) && !empty($this->productType->name)) {
            $parts[] = $this->productType->name;
        }

        if (!empty($this->vendor)) {
            if (!empty($this->vendor->short_name)) {
                $parts[] = $this->vendor->short_name;
            } else {
                $parts[] = $this->vendor->name;
            }
        }

        // Добавляем наименование модели и артикул
        if (!empty($this->name) && !empty($this->article) && ($this->name != $this->article)) {
            $parts[] = $this->name . ' (' . $this->article . ')';
        }

        if (!empty($this->name) && !empty($this->article) && ($this->name == $this->article)) {
            $parts[] = $this->name;
        }

        if (!empty($this->name) && empty($this->article)) {
            $parts[] = $this->name;
        }

        if (empty($this->name) && !empty($this->article)) {
            $parts[] = $this->article;
        }

        // Объединяем части в единую строку
        return implode(' ', $parts);
    }

    public function getUserPrice()
    {
        // Если цена пустая или равна 0, возвращаем специальную надпись
        if (!$this->price || empty($this->price)) {
            return "По запросу"; // Или любое подходящее сообщение
        }

        // Базовая цена продукта
        $basePrice = $this->price;

        // Если пользователь не авторизован, выдаём полную цену
        if (!Auth::check()) {
            return number_format($basePrice, 0, '.', ' ') . ' ₽';
        }

        // Авторизованный пользователь
        $user = Auth::user();

        // Проверяем наличие группы и скидки
        if ($user->group && isset($user->group->discount)) {
            // Вычисляем цену с учётом скидки
            $discountedPrice = $basePrice - ($basePrice * $user->group->discount / 100);
            return number_format($discountedPrice, 0, '.', ' ') . ' ₽';
        }

        // Пользователь авторизован, но скидка не задана
        return number_format($basePrice, 0, '.', ' ') . ' ₽';
    }

    public function getUserStock()
    {
        // Проверяем, существует ли товар вообще (не равен null)
        if ($this->stock === null) {
            return '';
        }

        // Обрабатываем случай, когда товара нет в наличии или ожидаемый
        elseif ($this->stock <= 0) {
            if ($this->stock == 0) {
                return "Под заказ. " . $this->vendor->delivery_time;
            } else {
                return "Ожидается"; // Если stock меньше нуля
            }
        }

        // Товар доступен в положительном количестве
        else {
            return "В наличии " . $this->stock . " шт.";
        }
    }

    public function getAverageReviewRating()
    {
        if (round($this->reviews()->avg('rating'), 2) != 0) {
            return round($this->reviews()->avg('rating'), 2);
        } else {
            return 0;
        }
    }

    public function getStarReviewsCount()
    {
        return $this->reviews()
            ->selectRaw('rating, COUNT(*) AS count')
            ->groupBy('rating')
            ->pluck('count', 'rating')
            ->mapWithKeys(function ($value, $key) {
                return ["{$key}StarReviewsCount" => $value];
            })
            ->all();
    }

    public function getAverageReviewRatingString()
    {
        if (round($this->reviews()->avg('rating'), 2) != 0) {
            return round($this->reviews()->avg('rating'), 2);
        } else {
            return "";
        }
    }

    public function getCountReviewsString()
    {
        if (!empty($this->reviews)) {
            if ($this->reviews->count() != 0) {
                return $this->reviews->count() . " " . pluralForm(count($this->reviews), ['отзыв', 'отзыва', 'отзывов']);
            } else {
                return "";
            }
        }
    }

    public function getLinkAttribute(): string
    {
        return route('product.show', ['slug' => $this->attributes['slug']]);
    }

    public function getFiles()
    {
        $files = [];

        // Получаем медиа-коллекции
        $specification = $this->getMedia('specification');
        $dimensionalDrawing = $this->getMedia('dimensionalDrawing');
        $overviewInformation = $this->getMedia('overviewInformation');
        $model = $this->getMedia('3dModel');

        // Сбор ссылок на файлы
        if ($specification->isNotEmpty()) {
            $files['specification'] = [
                'url' => $specification->first()->getUrl(),
                'path' => $specification->first()->getPath()
            ];
        }

        if ($dimensionalDrawing->isNotEmpty()) {
            $files['dimensionalDrawing'] = [
                'url' => $dimensionalDrawing->first()->getUrl(),
                'path' => $dimensionalDrawing->first()->getPth()
            ];
        }

        if ($overviewInformation->isNotEmpty()) {
            $files['overviewInformation'] = [
                'url' => $overviewInformation->first()->getUrl(),
                'path' => $overviewInformation->first()->getPath()
            ];
        }

        if ($model->isNotEmpty()) {
            $files['3dModel'] = [
                'url' => $model->first()->getUrl(),
                'path' => $model->first()->getPath()
            ];
        }
        return $files;
    }


    //  ***Отзывы на товар***
    public function getAllReviewImages()
    {
        $allReviewsRating = $this->reviews()->with('media')->get()->flatMap(function ($review) {
            return $review->getMedia('photos');
        });
        return $allReviewsRating;
    }

    public function getReviewStatsAttribute()
    {
        $reviewData = $this->reviews()
            ->selectRaw('
                ROUND(AVG(rating), 2) AS average_rating,
                SUM(CASE WHEN rating = 1 THEN 1 ELSE 0 END) AS one_star_count,
                SUM(CASE WHEN rating = 2 THEN 1 ELSE 0 END) AS two_star_count,
                SUM(CASE WHEN rating = 3 THEN 1 ELSE 0 END) AS three_star_count,
                SUM(CASE WHEN rating = 4 THEN 1 ELSE 0 END) AS four_star_count,
                SUM(CASE WHEN rating = 5 THEN 1 ELSE 0 END) AS five_star_count,
                COUNT(*) AS total_reviews
            ')
            ->first();

        // Минимальное число отзывов для избежания деления на ноль
        $totalReviews = max($reviewData->total_reviews, 1);

        return [
            'averageReviewRating' => round($reviewData->average_rating, 2),
            'roundedAverageRating' => round($reviewData->average_rating, 0),
            'oneStarReviewsCount' => $reviewData->one_star_count,
            'twoStarReviewsCount' => $reviewData->two_star_count,
            'threeStarReviewsCount' => $reviewData->three_star_count,
            'fourStarReviewsCount' => $reviewData->four_star_count,
            'fiveStarReviewsCount' => $reviewData->five_star_count,
            'oneStarReviewsPercent' => round(($reviewData->one_star_count / $totalReviews) * 100, 0),
            'twoStarReviewsPercent' => round(($reviewData->two_star_count / $totalReviews) * 100, 0),
            'threeStarReviewsPercent' => round(($reviewData->three_star_count / $totalReviews) * 100, 0),
            'fourStarReviewsPercent' => round(($reviewData->four_star_count / $totalReviews) * 100, 0),
            'fiveStarReviewsPercent' => round(($reviewData->five_star_count / $totalReviews) * 100, 0)
        ];
    }

    public function getNewReviews()
    // Массив отзывов отсортированных по новизне
        {
            return $this->reviews()
            ->orderBy('created_at', 'desc')
            ->with('media')
            ->with('user')
            ->get();
        }

        public function getBestRatedReviews()
            // Массив отзывов отсортированных по рейтингу, затем по дате публикации
            {
            return $this->reviews()
            ->orderBy('rating', 'desc')   // Первичная сортировка по рейтингу
            ->orderBy('created_at', 'desc') // Вторичная сортировка по датам публикаций
            ->with('media')
            ->with('user')
            ->get();
            }

    /*$reviewRating = [
            'averageReviewRating' => round($product->reviews()->avg('rating'), 2),
            'roundedAverageRating' => round($product->reviews()->avg('rating'), 0),

            // Подсчет количества отзывов каждого типа
            'oneStarReviewsCount' => $product->reviews()->where('rating', '=', 1)->count(),
            'twoStarReviewsCount' => $product->reviews()->where('rating', '=', 2)->count(),
            'threeStarReviewsCount' => $product->reviews()->where('rating', '=', 3)->count(),
            'fourStarReviewsCount' => $product->reviews()->where('rating', '=', 4)->count(),
            'fiveStarReviewsCount' => $product->reviews()->where('rating', '=', 5)->count(),

            // Процентная доля каждого типа отзыва
            'oneStarReviewsPercent' => round(($product->reviews()->where('rating', '=', 1)->count() / $product->reviews()->count()) * 100, 0),
            'twoStarReviewsPercent' => round(($product->reviews()->where('rating', '=', 2)->count() / $product->reviews()->count()) * 100, 0),
            'threeStarReviewsPercent' => round(($product->reviews()->where('rating', '=', 3)->count() / $product->reviews()->count()) * 100, 0),
            'fourStarReviewsPercent' => round(($product->reviews()->where('rating', '=', 4)->count() / $product->reviews()->count()) * 100, 0),
            'fiveStarReviewsPercent' => round(($product->reviews()->where('rating', '=', 5)->count() / $product->reviews()->count()) * 100, 0)
        ];
    }*/
}
