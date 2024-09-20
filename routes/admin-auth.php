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
use App\Http\Controllers\Admin\AnalogVendorController;
use App\Http\Controllers\Admin\ProductTypeController;
use App\Http\Controllers\Admin\ProductTypePropertyController;



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

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('/rap')->name('rap.')->group(function () {
        Route::resource('roles', App\Http\Controllers\Admin\RolesController::class);
        Route::resource('permissions', App\Http\Controllers\Admin\PermissionsController::class);
        Route::get('/', [App\Http\Controllers\Admin\RolesController::class, 'rap'])->name('rap.list');
    });
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('content', [ContentController::class, 'index'])->name('content.index');
    Route::get('model', [ContentController::class, 'model'])->name('content.model');

    Route::resource(name: 'user', controller: UserController::class);
    Route::resource(name: 'product', controller: ProductController::class);
    Route::get('product_statistic', [ProductController::class, 'statistic'])->name('product_statistic');
    Route::resource(name: 'category', controller: CategoryController::class);
    Route::get('category/createNew/{category}', [CategoryController::class, 'createNew'])->name('category.createNew');

    Route::resource(name: 'vendor', controller: VendorController::class);
    Route::post('/images/upload', [ContentController::class, 'imagesUpload'])->name('images_upload');
    Route::resource(name: 'currency', controller: CurrencyController::class);
    Route::resource(name: 'delivery', controller: DeliveryController::class);
    Route::resource(name: 'analog-vendor', controller: AnalogVendorController::class);
    Route::resource(name: 'product_type', controller: ProductTypeController::class);


    Route::resource(name: 'product_type_property', controller: ProductTypePropertyController::class);
    Route::get('product_type_property/createNew/{product_type}', [ProductTypePropertyController::class, 'createNew'])->name('product_type_property.createNew');

});
