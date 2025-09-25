<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\ArticleController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\DocumentationController;
use App\Http\Controllers\Front\QuestionController;
use App\Http\Controllers\Front\ReviewsController;
use App\Http\Controllers\Front\FileController;
use App\Http\Controllers\Front\AccountController;
use App\Http\Controllers\Front\{HomeController, PageController, CategoryController, ProductController ,CartController, FaqController ,SearchController , VendorController};


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/news', [NewsController::class, 'index'])->name('news');
//Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/article', [ArticleController::class, 'index'])->name('articles');
//Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');

Route::get('/documentation', [DocumentationController::class, 'index'])->name('documentation');

Route::get('/question', [QuestionController::class, 'index'])->name('question');

Route::resource('/reviews', ReviewsController::class);

Route::get('/account', [AccountController::class, 'index'])->name('account');


Route::get('/pages/{slug}', [PageController::class, 'show'])->name('page.show');

Route::get('/catalog', [CategoryController::class, 'catalog'])->name('catalog');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

Route::get('/download-all-files/{product}', [FileController::class, 'downloadAll'])->name('download.all.files');

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


//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');






require __DIR__ . '/auth.php';




