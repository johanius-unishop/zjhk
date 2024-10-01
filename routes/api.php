<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->name('v1.')->group(function () {


    Route::prefix('/cart')->name('cart.')->group(function () {
        Route::get('/getCart', [App\Http\Controllers\Api\V1\CartController::class, 'getCart']);
        Route::get('/addToCart', [App\Http\Controllers\Api\V1\CartController::class, 'addToCart']);
        Route::get('/subToCart', [App\Http\Controllers\Api\V1\CartController::class, 'subToCart']);

        // Route::get('/getFavourite', [App\Http\Controllers\Api\V1\CartController::class, 'getFavourite']);
        // Route::get('/addToFavourite', [App\Http\Controllers\Api\V1\CartController::class, 'addToFavourite']);
        // Route::get('/subToFavourite', [App\Http\Controllers\Api\V1\CartController::class, 'subToFavourite']);

    });





    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::get('/roles', [App\Http\Controllers\Api\V1\RolesController::class, 'index']);
        Route::get('/permissions', [App\Http\Controllers\Api\V1\PermissionsController::class, 'index']);

        Route::get('/property_list', [App\Http\Controllers\Api\V1\ProductTypeController::class, 'property_list']);
        Route::post('/product_property_update', [App\Http\Controllers\Api\V1\ProductTypeController::class, 'product_property_update']);


    });
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
