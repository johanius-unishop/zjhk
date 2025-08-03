<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\{HomeController, PageController, NewsController, CategoryController, ProductController ,CartController , FaqController ,SearchController , VendorController ,ArticleController};
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/pages/{slug}', [PageController::class, 'show'])->name('page.show');

Route::get('/catalog', [CategoryController::class, 'catalog'])->name('catalog');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/product/{product}', [ProductController::class, 'testShow'])->name('testShow');

Route::get('/faq', [FaqController::class, 'show'])->name('faq.show');

Route::get('search', [SearchController::class, 'search'])->name('search');
Route::get('/vendors', [VendorController::class, 'index'])->name('vendors.index');

  Route::get('/vendors/{vendor}', [VendorController::class, 'show'])->name('vendors.show');


Route::post('make_order', [CartController::class, 'make_order'])->name('make_order');
Route::get('favorite', [CartController::class, 'show_favourites'])->name('favorite');


Route::get('cart', [CartController::class, 'show_cart'])->name('cart');
Route::get('/clear_cart', [CartController::class, 'clearCart'])->name('clear_cart');
Route::get('/sub_from_cart', [CartController::class, 'subFromCart'])->name('sub_from_cart');

Route::prefix('/cart')->name('cart.')->group(function () {

    Route::get('/order_confirm', [CartController::class, 'order_confirm'])->name('order_confirm');
    Route::get('/getCart', [CartController::class, 'getCart']);
    Route::get('/addToCart', [CartController::class, 'addToCart']);
    Route::get('/subToCart', [CartController::class, 'subToCart']);

    Route::get('/getFavourite', [CartController::class, 'getFavourite']);
    Route::get('/addToFavourite', [CartController::class, 'addToFavourite']);
    Route::get('/subToFavourite', [CartController::class, 'subToFavourite']);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
//Аутентификация админа......require __DIR__ . '/admin-auth.php';




