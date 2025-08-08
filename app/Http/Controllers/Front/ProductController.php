<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductType;
use App\Models\ProductTypeProperty;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\ViewModels\ProductViewModel;
use Mews\Purifier\Facades\Purifier;

class ProductController extends Controller
{
    //public function show(Product $product)
    //{

    //  $viewModel = new ProductViewModel($product);
    //return view('product-card', compact('viewModel'));
    //}

    // public function testShow(Product $product)
    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->with([
                'productType',
                'productPropertyValues',
                'vendor.country',
                'composite.compositeProduct',
                'composite.compositeType',
                'productType.relatedTypes.relatedProducts.product'
            ])
            ->firstOrFail();
        if ($product->published !== 1) {
            return abort(404);
        }



        // $analogs = (Product::getAnalogies($product));
        // /$viewModel = new ProductViewModel($product);
        $images      = $product->getMedia('images');
        $parents = Category::ancestorsAndSelf($product->category_id)->toArray();

        $productId = $product->id;
        $productTypeId = Product::query()->where('id', '=', $productId)->first()->product_type_id;

        $technical_data =  ProductTypeProperty::query()
            ->leftJoin('product_property_values', function ($join) use ($productId) {
                $join->on('product_type_properties.id', '=', 'product_property_values.product_type_property_id')
                    ->where('product_property_values.product_id', '=', $productId);
            })
            ->leftJoin('product_type_property_values', 'product_property_values.product_type_property_value_id', '=', 'product_type_property_values.id')
            ->where('product_type_properties.product_type_id', '=', $productTypeId)
            ->orderBy('product_type_properties.order_column')
            ->select([
                'product_type_properties.name as characteristic_name',
                'product_type_property_values.value as characteristic_value',
            ])
            ->get()  // Выполняем запрос и получаем результат в виде Collection
            ->toArray();  // Конвертируем результат в массив



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
            foreach ($product->productType->relatedTypes as $element) {
                if (!empty($element->relatedProducts) && count($element->relatedProducts) > 0) {
                    $related[] = $element;
                }
            }
        }

        usort($related, function ($a, $b) {
            return $a['order_column'] <=> $b['order_column'];
        });

        dd($related);

        // foreach ($product->productType->relatedTypes as $element) {
        //   if (!empty($element))
        // {
        //   $related
        // }


        $data = [

            'parents' => $parents,
            'product' => $product,
            // 'analogs' => $analogs,
            'technical_data' => $technical_data,
            'compositionSet' => $compositionSet,
            'images' => $images,
            // 'media' => $media,
            // 'files' => $files,
            // 'price_categories' => $price_categories,
            // 'stores' => $stores,
            // 'enableQuestion' => $enableQuestion,
            // 'enableFastBay' => $enableFastBay,
            // 'enableSale' => $enableSale,
        ];






        SEOMeta::setTitle($product->seo->title);
        SEOMeta::setDescription($product->seo->description);
        SEOMeta::setKeywords($product->seo->keywords);
        //    dd($data);
        return view('front.product.show', ['data' => $data]);
    }
}
