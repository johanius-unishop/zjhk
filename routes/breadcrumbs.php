<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use App\Models\Page;
use App\Models\News;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\Category;
// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Главная', route('home'));
});

// Home > Catalog
Breadcrumbs::for('catalog', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Каталог', route('catalog'));
});
// Home > search_result
Breadcrumbs::for('search_result', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Результаты поиска'  );
});



// Home > Categories
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail, $parents, Category $item) {
    $trail->parent('catalog');
    if (isset($parents) && is_countable($parents) > 0) {
        foreach ($parents as $category) {
            $trail->push($category['name'], URL::to('/category/' . @$category['slug']));
        }
    }
    $trail->push($item->name);
    });



// Home > News
Breadcrumbs::for('news', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Новости', route('news.index'));
});

// Home > News > [news]
Breadcrumbs::for('news_item', function (BreadcrumbTrail $trail, $news) {
    $trail->parent('news');
    $trail->push($news->name);
});

// Home > Page
Breadcrumbs::for('page', function (BreadcrumbTrail $trail, $page): void {
    $trail->parent('home');
    $trail->push($page->name);
});


// // Home > Vendor
// Breadcrumbs::for('vendor', function (BreadcrumbTrail $trail, Vendor $vendor) {
//     $trail->parent('vendors');
//     $trail->push($vendor->name);
// });

// Home > Vendors
Breadcrumbs::for('vendors', function (BreadcrumbTrail $trail) {
    $trail->parent('catalog');
    $trail->push('Производители', route('vendors.index'));
});
// Home > Vendor
Breadcrumbs::for('vendor', function (BreadcrumbTrail $trail, Vendor $vendor) {
    $trail->parent('vendors');
    $trail->push($vendor->name);
});

// Home > Contact
Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Контакты');
});

// Home > Faq

Breadcrumbs::for('faq', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Faq');
});

// Home > Cart
Breadcrumbs::for('cart', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Корзина');
});
// Home > Favourites
Breadcrumbs::for('favourites', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Избранное');
});

// Home > Product
Breadcrumbs::for('front_product', function (BreadcrumbTrail $trail, $parents, Product $item) {
    $trail->parent('catalog');

    if (isset($parents) && is_countable($parents) > 0) {
        foreach ($parents as $category) {
            $trail->push($category['name'], URL::to('/category/' . @$category['slug']));
        }
    }
    $trail->push($item->name);
    // 	$breadcrumbs->push($item->name );
});
