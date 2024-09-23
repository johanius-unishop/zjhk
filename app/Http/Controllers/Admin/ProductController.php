<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\{PriceSegment, Product, ProductClass, ProductStyle, Filter};

use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Category;
use App\Models\ProductType;
use App\Models\Vendor;
use App\Models\Currency;
use Illuminate\Http\Request;



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
        if (!Gate::allows('manage content')) {
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
        if (!Gate::allows('manage content') && !Gate::allows('manage image')) {
            return abort(401);
        }

        return view('admin.product.index');
    }

    public function create()
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $parentCategories = Category::getCategoriesAsTree();
        $currencies       = Currency::get(array('name', 'id'));
        $productTypes      = ProductType::get(array('name', 'id'));
        $vendors          = Vendor::get(array('name', 'id'));
        return view('admin.product.create', compact('parentCategories', 'productTypes', 'vendors', 'currencies'));

    }

    /**
     * Store a newly created resource in storage.StoreProduct
     */
    public function store(StoreProductRequest $request)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        $input = $request->all();


        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $request->filled(key: 'composite_product') ? $input['composite_product'] = 1 : $input['composite_product'] = 0;

        // $request->filled('in_stock') ? $input['in_stock'] = 1 : $input['in_stock'] = 0;

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
        return redirect(route('admin.product.edit', $record->id));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        if (!Gate::allows('manage content') && !Gate::allows('manage image')) {
            return abort(401);
        }

        // Fix to seeded records
        if ($product->seo->title == '') {
            $product->addSEO();
        }
        $currencies    = Currency::get(array('name', 'id'));
        $productTypes = ProductType::get(columns: array('name', 'id'));
        $vendors       = Vendor::get(array('name', 'id'));

        $parentCategories = Category::getCategoriesAsTree();


        return view('admin.product.edit', compact('product', 'parentCategories', 'productTypes', 'vendors', 'currencies'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        $input = $request->all();
        // $input['product_type_id'] = ProductSubtype::where('id', $input['product_subtype_id'])->first()->product_type_id;

        $request->filled(key: 'published') ? $input['published'] = 1 : $input['published'] = 0;
        $request->filled(key: 'composite_product') ? $input['composite_product'] = 1 : $input['composite_product'] = 0;


        // $request->filled('active') ? $input['active'] = 1 : $input['active'] = 0;
        // $request->filled('in_stock') ? $input['in_stock'] = 1 : $input['in_stock'] = 0;

        $product->update($input);

        $product->seo->update([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'canonical_url' => $request->canonical_url,
        ]);
        //  ' . $product->name . '
        session()->flash('success', 'Запись успешно обновлена');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.product.index'));
        }
        return redirect(route('admin.product.edit', $product->id));
    }


}
