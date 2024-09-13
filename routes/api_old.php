<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->name('v1.')->group(function () {
    // Route::post('next_page', [App\Http\Controllers\Api\V1\CartController::class, 'getNextPage'])->name('next_page');

    // Route::prefix('/cart')->name('cart.')->group(function () {
    //     Route::get('/getCart', [App\Http\Controllers\Api\V1\CartController::class, 'getCart']);
    //     Route::get('/addToCart', [App\Http\Controllers\Api\V1\CartController::class, 'addToCart']);
    //     Route::get('/subToCart', [App\Http\Controllers\Api\V1\CartController::class, 'subToCart']);

    //     Route::get('/getFavourite', [App\Http\Controllers\Api\V1\CartController::class, 'getFavourite']);
    //     Route::get('/addToFavourite', [App\Http\Controllers\Api\V1\CartController::class, 'addToFavourite']);
    //     Route::get('/subToFavourite', [App\Http\Controllers\Api\V1\CartController::class, 'subToFavourite']);

    // });
    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::get('/roles', [App\Http\Controllers\Api\V1\RolesController::class, 'index']);
        Route::get('/permissions', [App\Http\Controllers\Api\V1\PermissionsController::class, 'index']);

        // Route::get('/fabric', [App\Http\Controllers\Api\V1\VendorController::class, 'list']);
        // Route::get('/fabric/by_id', [App\Http\Controllers\Api\V1\VendorController::class, 'list_by_id']);
        // Route::get('/test_json_group', [App\Http\Controllers\Api\V1\ProductTypeController::class, 'test_json_group']);

        // Route::get('/product_type', [App\Http\Controllers\Api\V1\ProductTypeController::class, 'list']);
        // Route::get('/product_type/by_id', [App\Http\Controllers\Api\V1\ProductTypeController::class, 'list_by_id']);
        // Route::get('/product_subtype', [App\Http\Controllers\Api\V1\ProductTypeController::class, 'product_subtype']);
        // Route::get('/product_subtype/by_id', [App\Http\Controllers\Api\V1\ProductTypeController::class, 'product_subtype_by_id']);

    });
});
// /{vendor_id}

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
