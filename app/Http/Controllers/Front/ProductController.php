<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\RelatedProduct;
use App\Models\ProductTypeProperty;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\ViewModels\ProductViewModel;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->with([
                'productType',
                'productPropertyValues',
                'vendor.country',
                'composite.compositeProduct',
                'composite.compositeType',
                'questions',
                'productType.relatedTypes' => function ($query) {
                    $query->orderBy('order_column'); // Замените order_column на фактическое название колонки, по которой хотите сортировать
                },
            ])
            ->firstOrFail();
        if ($product->published !== 1) {
            return abort(404);
        }



        $analogs = $product->getAnalogies();
        // /$viewModel = new ProductViewModel($product);
        $images      = $product->getMedia('images');
        $files = $product->getFiles();
        $parents = Category::ancestorsAndSelf($product->category_id)->toArray();

        $technical_data = $product->getProperties();


        $compositionSet = [];
        foreach ($product->composite as $element) {
            if (
                !empty($element->compositeType) &&
                !empty($element->compositeProduct) &&
                !empty($element->compositeType->name) &&
                !empty($element->compositeProduct->name) &&
                !empty($element->compositeProduct->article)
            ) {
                $compositionSet[] = [
                    'type' => $element->compositeType->name,
                    'model' => $element->compositeProduct->name,
                    'article' => $element->compositeProduct->article,
                    'qty' => $element->quantity,
                    'link' => '/product/' . $element->compositeProduct->slug, // Форматируем ссылку на товар
                    'order_column' => $element->compositeType->order_column,
                ];
            }
        }

        // Сортируем массив по полю 'order_column' по возрастанию
        usort($compositionSet, function ($a, $b) {
            return $a['order_column'] <=> $b['order_column'];
        });

        $related = [];
        if (!empty($product->productType) && !empty($product->productType->relatedTypes)) {
            $relatedTypes = $product->productType->relatedTypes->sortBy('order_column');

            foreach ($relatedTypes as $element) {
                if (!empty($element)) {
                    // Создание внутреннего массива для хранения текущего элемента и связанных товаров
                    $ids = RelatedProduct::query()
                        ->where('product_id', '=', $product->id)
                        ->where('related_product_type_id', '=', $element->id)
                        ->pluck('id_product'); // Извлекаем только поле id_product

                    $relatedProducts = Product::query()
                        ->whereIn('id', $ids)          // выбираем только те товары, чей id содержится в списке $ids
                        ->orderBy('stock', 'desc')     // сортируем по полю stock в порядке возрастания
                        ->get();                      // выполняем запрос и получаем результат

                    $relatedElement = [
                        'type' => $element,
                        'relatedProducts' => $relatedProducts
                    ];


                    // Добавление внутреннего массива в общий список
                    if ($relatedElement['relatedProducts']->count() > 0)
                        $related[] = $relatedElement;
                }
            }
        }
        // Получаем все изображения, объединяя через flatMap
       // $allReviewImages = $product->reviews()->with('media')->get()->flatMap(function ($review) {
       //     return $review->getMedia('photos');
      //  });

        $reviewData = $product->getReviewStatsAttribute();


        // Массив отзывов отсортированных по новизне
        $newReviews = $product->reviews()
            ->orderBy('created_at', 'desc')
            ->with('media')
            ->with('user')
            ->get();

        // Массив отзывов отсортированных по рейтингу, затем по дате публикации
        $bestRatedReviews = $product->reviews()
            ->orderBy('rating', 'desc')   // Первичная сортировка по рейтингу
            ->orderBy('created_at', 'desc') // Вторичная сортировка по датам публикаций
            ->with('media')
            ->with('user')
            ->get();

        $acceptsWebP = strpos(request()->header('accept'), 'image/webp') !== false;
        $data = [
            'acceptsWebP' => $acceptsWebP,
            'parents' => $parents,
            'product' => $product,
            'technical_data' => $technical_data,
            'compositionSet' => $compositionSet,
            'related' => $related,
            'images' => $images,
            //'allReviewImages' => $allReviewImages,
            'reviewData' => $reviewData,
            'reviewRating' => $reviewRating,
            'analogs' => $analogs,
            'files' => $files,
            //'bestRatedReviews' => $bestRatedReviews,
            // 'enableQuestion' => $enableQuestion,
            // 'enableFastBay' => $enableFastBay,
            // 'enableSale' => $enableSale,
        ];



        // SEOMeta::setTitle($product->seo->title ?: 'Стандартный заголовок');
        if ($product->seo && is_null($product->seo->title)) {
            // Если нет, создаем новую запись
            $product->seo()->update(['title' => $this->generateUniqueTitle($product)]);
        }



        SEOMeta::setTitle($product->seo->title);
        SEOMeta::setDescription($product->seo->description);
        SEOMeta::setKeywords($product->seo->keywords);
        //    dd($data);
        return view('front.product.show', ['data' => $data]);
    }

    private function generateUniqueTitle($product)
    {
        $parts = [];

        // 1. Тип продукта (если есть)
        if (!empty($product->productType)) {
            $parts[] = $product->productType->name;
        }

        // 2. Бренд (если есть)
        if (!empty($product->vendor)) {
            $parts[] = $product->vendor->short_name;
        }

        // 3. Модель (если есть)
        if (!empty($product->name)) {
            $parts[] = $product->name;
        }

        // 4. Артикул (если артикул не совпадает с моделью)
        if (!empty($product->article) && $product->article !== $product->name) {
            $parts[] = '(' . $product->article . ')';
        }

        // 5. Фиксированная фраза "купить по низкой цене"
        $parts[] = 'купить по низкой цене';

        // Собираем финальное название
        return implode(' ', array_filter($parts));
    }
}
