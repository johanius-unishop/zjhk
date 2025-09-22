<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\{PriceSegment, Product, ProductClass, ProductStyle, Filter, User};

use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Category;
use App\Models\ProductType;
use App\Models\Vendor;
use App\Models\Currency;
use App\Models\Country;
use App\Models\Order;
use App\Models\OrderComposition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
// use PhpOffice\PhpSpreadsheet\Style\NumberFormat\Wizard\Currency;
class ProductController extends Controller
{
    /**
     * Display a statistic of the resource.
     */
    public function statistic()
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }

        $with_filter = Product::whereNull('filter_id')->count();
        $total       = Product::count();


        $products_seo = Product::whereHas('seo', function ($query) {
            $query->whereNull('keywords')->orWhereNull('description');
        })->get();

        $products_media = Product::withCount('media')
            ->having('media_count', '=', 0)
            ->get();

        $products_description = Product::where('body_description', '')->get();
        $data                 = [
            'without_seo' => $products_seo->count(),
            'without_media' => $products_media->count(),
            'without_description' => $products_description->count(),
            'with_filter' => $with_filter,
            'total' => $total,
        ];
        return view('admin.product.statistic', compact('data'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('admin-content') && !Gate::allows('manage image')) {
            return abort(401);
        }

        return view('admin.product.index');
    }

    public function create()
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        $parentCategories = Category::getCategoriesAsTree();
        $currencies       = Currency::get(array('name', 'id'));
        $productTypes     = ProductType::get(array('name', 'id'));
        $vendors          = Vendor::get(array('name', 'id'));
        return view('admin.product.create', compact('parentCategories', 'productTypes', 'vendors', 'currencies'));

    }

    /**
     * Store a newly created resource in storage.StoreProduct
     */
    public function store(StoreProductRequest $request)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }

        $input = $request->all();

        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $request->filled(key: 'composite_product') ? $input['composite_product'] = 1 : $input['composite_product'] = 0;

        $record = Product::create($input);

        $record->seo->update([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'canonical_url' => $request->canonical_url,
        ]);

        session()->flash('success', 'Запись успешно создана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.product.index'));
        }
        return redirect(route('admin.product.edit', $record->slug));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        if (!Gate::allows('admin-content'))
        {
            return abort(401);
        }
        // !!!Fix to seeded records
        if ($product->seo->title == '') {
            $product->addSEO();
        }
        $currencies       = Currency::get(array('name', 'id'));
        $productTypes     = ProductType::get(columns: array('name', 'id'));
        $vendors          = Vendor::get(array('name', 'id'));
        $countries        = Country::select(['name', 'id'])->orderBy('name')->get();
        $parentCategories = Category::getCategoriesAsTree();



        $ordered = OrderComposition::join('orders', 'orders.id', '=', 'order_compositions.order_id')
                           ->where('orders.received', false)
                           ->where('order_compositions.product_id', $product->id)
                           ->sum('order_compositions.quantity');

        return view('admin.product.edit', compact('product', 'parentCategories', 'productTypes', 'vendors', 'currencies', 'countries', 'ordered'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        $input = $request->all();

        $request->filled(key: 'published') ? $input['published'] = 1 : $input['published'] = 0;
        $request->filled(key: 'composite_product') ? $input['composite_product'] = 1 : $input['composite_product'] = 0;

        $product->update($input);

        $product->seo->update([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'canonical_url' => $request->canonical_url,
        ]);

        session()->flash('success', 'Запись успешно обновлена');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.product.index'));
        }
        return redirect(route('admin.product.edit', $product->slug));
    }

    //
    public function showProductsWithoutType()
    {
        // Логика для получения и отображения товаров без типа
        $productsWithoutType = Product::whereNull('product_type_id')->get(); // Получаем товары без типа
        $productTypes = ProductType::select('id', 'name')
                                 ->orderBy('name', 'asc') // asc для возрастания, desc для убывания
                                 ->get();
        return view('admin.problem.product-without-type', compact('productsWithoutType', 'productTypes'));
    }
    public function showProductsWithoutVendor()
    {
        // Логика для получения и отображения товаров без производителя
        $productsWithoutVendor = Product::where(function($query) {
            $query->whereNull('vendor_id')
                  ->orWhere('vendor_id', '=', 0);
        })
        ->get(); // Получаем товары без производителя
        $vendors = Vendor::select('id', 'short_name')->get();
        return view('admin.problem.product-without-vendor', compact('productsWithoutVendor', 'vendors'));
    }
    public function showProductsWithoutCategory()
    {
        // Логика для получения и отображения товаров без категории
        $productsWithoutCategory = Product::whereNull('category_id')->get(); // Получаем товары без категории
        $categories = Category::get()->toFlatTree();
        return view('admin.problem.product-without-category', compact('productsWithoutCategory', 'categories'));
    }
    public function showProductsWithoutCurrency()
    {
        // Логика для получения и отображения товаров без валюты
        $productsWithoutCurrency = Product::whereNull('currency_id')->get(); // Получаем товары без валюты
        $currencies = Currency::select('id', 'charcode')->get();
        return view('admin.problem.product-without-currency', compact('productsWithoutCurrency', 'currencies'));
    }
    public function showProductsWithoutSupplierPrice()
    {
        // Логика для получения и отображения товаров без цены от поставщика
        $productsWithoutSupplierPrice = Product::where(function($query) {
            $query->whereNull('composite_product')
                  ->orWhere('composite_product', '=', 0);
        })
        ->where(function($query) {
            $query->whereNull('supplier_price')
                  ->orWhere('supplier_price', '=', 0);
        })
        ->with(['vendor' => function($query) {
            $query->select('id', 'short_name'); // Выберите нужные поля из таблицы vendors
        }])
        ->get();
        return view('admin.problem.product-without-supplier-price', compact('productsWithoutSupplierPrice'));
    }
    public function showProductsWithoutTnved()
    {
        // Логика для получения и отображения товаров без ТН ВЭД
        $productsWithoutTnved = Product::where(function($query) {
            $query->whereNull('composite_product')
                  ->orWhere('composite_product', '=', 0);
        })
        ->where(function($subQuery) {
            $subQuery->whereNull('tn_ved')
                  ->orWhere('tn_ved', '=', '');
        })
        ->get(); // Получаем товары без ТН ВЭД
        return view('admin.problem.product-without-tnved', compact('productsWithoutTnved'));
    }

    public function showProductsWithProblemImages()
    {
        return view('admin.problem.product-with-problem-images');
    }

    public function showProductsWithoutModel()
    {
        return view('admin.problem.product-without-model');
    }

    public function showProductsWithoutPropertyValues()
    {
        return view('admin.problem.product-without-property-values');
    }









}
