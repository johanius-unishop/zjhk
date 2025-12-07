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

// Главная
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Главная', route('home'));
});

// Главная > О компании
Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('О компании', route('about'));
});

// Главная > Новости
Breadcrumbs::for('news.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Новости', route('news'));
});

// Главная > Статьи
Breadcrumbs::for('article.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Статьи', route('articles'));
});

// Главная > Контакты
Breadcrumbs::for('contact.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Контакты', route('contacts'));
});

// Главная > Документация
Breadcrumbs::for('documentation', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Документация', route('documentation'));
});

// Главная > Вопрос-ответ
Breadcrumbs::for('question.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Вопрос-ответ', route('question'));
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
Breadcrumbs::for('category.show', function (BreadcrumbTrail $trail, array $parents = [], Category $item) {
    $trail->parent('home');

    if (isset($parents) && is_countable($parents) > 0) {
        foreach ($parents as $category) {
            $trail->push($category['name'], URL::to('/category/' . @$category['slug']));
        }
    }
    $trail->push($item->name);
    });

// Home > Product
Breadcrumbs::for('product.show', function (BreadcrumbTrail $trail, array $parents = [], Product $item) {
    $trail->parent('home');

    if (!empty($parents)) {
        foreach ($parents as $category) {
            $trail->push($category['name'], URL::to('/category/' . @$category['slug']));
        }
    }
    $trail->push($item->name);
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
    $trail->parent('home');
    $trail->push('Производители', route('vendors'));
});
// Home > Vendor
Breadcrumbs::for('vendor', function (BreadcrumbTrail $trail, Vendor $vendor) {
    $trail->parent('vendors');
    $vendorName = trim($vendor->short_name) ?: $vendor->name;
    $trail->push($vendorName);
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







// ADMIN Home
Breadcrumbs::for('admin_home', function (BreadcrumbTrail $trail) {
    $trail->push('Главная', route('admin/dashboard'));
});

