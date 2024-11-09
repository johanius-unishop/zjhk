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
use App\Http\Controllers\Admin\ProductTypePropertyController;
use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\SiteOrdersController;
use App\Http\Controllers\Admin\SearchController;
use App\Http\Controllers\Admin\SettingController;


use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
    // Route::get('register', [RegisteredUserController::class, 'create'])
    //     ->name('register');

    // Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('search', [SearchController::class, 'search'])->name('search');

    Route::get('/dashboard', [ContentController::class, 'dashboard'])->name('dashboard');
    Route::get('/regenerate_sitemap', [ContentController::class, 'regenerateSitemap'])->name('regenerate_sitemap');

    Route::get('/all_orders', [ContentController::class, 'all_orders'])->name('all_orders');
    Route::resource('orders', SiteOrdersController::class);

    Route::get('/settings', [SettingController::class, 'index'])->name('settings');

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

    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
    Route::get('product_statistic', [ProductController::class, 'statistic'])->name('product_statistic');
    Route::resource('category', CategoryController::class);
    Route::get('category/createNew/{category}', [CategoryController::class, 'createNew'])->name('category.createNew');

    Route::resource('vendor', VendorController::class);
    Route::post('/images/upload', [ContentController::class, 'imagesUpload'])->name('images_upload');
    Route::resource('currency', CurrencyController::class);
    Route::resource('delivery', DeliveryController::class);
    Route::resource('analog_vendor', AnalogVendorController::class);
    Route::resource('analog', AnalogController::class);
    Route::resource('product_type', ProductTypeController::class);


    Route::resource('product_type_property', ProductTypePropertyController::class);
    //Рабочий маршрут
    Route::get('product_type_property/createNew/{product_type}', [ProductTypePropertyController::class, 'createNew'])->name('product_type_property.createNew');


    Route::resource('news', NewsController::class);
    Route::resource('page', PageController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('article', ArticleController::class);


});
