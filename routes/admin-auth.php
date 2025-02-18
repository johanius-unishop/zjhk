<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DeliveryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\AnalogController;
use App\Http\Controllers\Admin\AnalogVendorController;
use App\Http\Controllers\Admin\ProductTypeController;
use App\Http\Controllers\Admin\RelatedProductTypeController;
use App\Http\Controllers\Admin\ProductTypePropertyController;
use App\Http\Controllers\Admin\ProductTypePropertyValueController;
use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SearchController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AdditionalSettingController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\VendorPdfCatalogController;
use App\Http\Controllers\Admin\ProductPdfTypeController;


use Illuminate\Support\Facades\Route;
use Spatie\LaravelSettings\Settings;

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
         ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('search', [SearchController::class, 'search'])->name('search');

    Route::get('/dashboard', [ContentController::class, 'dashboard'])->name('dashboard');
    Route::get('/regenerate_sitemap', [ContentController::class, 'regenerateSitemap'])->name('regenerate_sitemap');

    Route::get('/all_orders', [ContentController::class, 'all_orders'])->name('all_orders');
    Route::resource('order', OrderController::class);

    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::get('/additional-settings', [AdditionalSettingController::class, 'index'])->name('additional-settings');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('/import')->name('import.')->group(function () {
        Route::delete('/product', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::prefix('/rap')->name('rap.')->group(function () {
        Route::resource('roles', App\Http\Controllers\Admin\RolesController::class);
        Route::resource('permissions', App\Http\Controllers\Admin\PermissionsController::class);
        Route::get('/', [App\Http\Controllers\Admin\RolesController::class, 'rap'])->name('rap.list');
    });

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('content', [ContentController::class, 'index'])->name('content.index');
    Route::get('model', [ContentController::class, 'model'])->name('content.model');
    Route::get('import', [ImportController::class, 'index'])->name('import.index');
    Route::get('import_product_files', [ImportController::class, 'import_product_files'])->name('import.import_product_files');
    Route::get('import_product_images', [ImportController::class, 'import_product_images'])->name('import.import_product_images');
    Route::post('import_price_from_xls', [ImportController::class, 'import_price_from_xls'])->name('import.import_price_from_xls');
    Route::post('export_products_properties_values_to_xls', [ImportController::class, 'export_products_properties_values_to_xls'])->name('import.export_products_properties_values_to_xls');
    Route::post('import_products_properties_values_from_xls', [ImportController::class, 'import_products_properties_values_from_xls'])->name('import.import_products_properties_values_from_xls');

    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
    Route::get('product_statistic', [ProductController::class, 'statistic'])->name('product_statistic');
    Route::resource('category', CategoryController::class);
    Route::get('category/createNew/{category}', [CategoryController::class, 'createNew'])->name('category.createNew');

    Route::resource('vendor', VendorController::class);
    Route::resource('country', CountryController::class);
    Route::post('/images/upload', [ContentController::class, 'imagesUpload'])->name('images_upload');
    Route::resource('currency', CurrencyController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('additional-setting', AdditionalSettingController::class);
    Route::resource('delivery', DeliveryController::class);
    Route::resource('analog-vendor', AnalogVendorController::class);
    Route::resource('analog', AnalogController::class);
    Route::resource('product-type', ProductTypeController::class);
    Route::resource('vendor-pdf-catalog', VendorPdfCatalogController::class);


    Route::resource('product_type_property', ProductTypePropertyController::class);
    Route::resource('product_type_property_value', ProductTypePropertyValueController::class);
    Route::resource('related_product_type', RelatedProductTypeController::class);
    Route::resource('product_pdf_type', ProductPdfTypeController::class);
    //Рабочий маршрут
    Route::get('product_type_property/createNew/{product_type}', [ProductTypePropertyController::class, 'createNew'])->name('product_type_property.createNew');


    Route::resource('news', NewsController::class);
    Route::resource('page', PageController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('article', ArticleController::class);

    Route::get('problem/product-without-type', [ProductController::class, 'showProductsWithoutType'])->name('problem.product-without-type');
    Route::get('problem/product-without-vendor', [ProductController::class, 'showProductsWithoutVendor'])->name('problem.product-without-vendor');
    Route::get('problem/product-without-category', [ProductController::class, 'showProductsWithoutCategory'])->name('problem.product-without-category');
    Route::get('problem/product-without-currency', [ProductController::class, 'showProductsWithoutCurrency'])->name('problem.product-without-currency');
    Route::get('problem/product-without-supplier-price', [ProductController::class, 'showProductsWithoutSupplierPrice'])->name('problem.product-without-supplier-price');
    Route::get('problem/product-without-tnved', [ProductController::class, 'showProductsWithoutTnved'])->name('problem.product-without-tnved');
    Route::get('problem/types-without-property', [ProductTypeController::class, 'showTypesWithoutProperty'])->name('problem.types-without-property');
    Route::get('problem/properties-without-values', [ProductTypePropertyController::class, 'showPropertiesWithoutValues'])->name('problem.properties-without-values');
    Route::get('problem/product-with-photo-problem', [ProductController::class, 'showProductsWithProblemImages'])->name('problem.product-with-photo-problem');
    Route::get('problem/product-without-model', [ProductController::class, 'showProductsWithoutModel'])->name('problem.product-without-model');
    Route::get('problem/product-without-property-values', [ProductController::class, 'showProductsWithoutPropertyValues'])->name('problem.product-without-property-values');
});
