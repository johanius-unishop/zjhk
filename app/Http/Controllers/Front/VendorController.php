<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Diglactic\Breadcrumbs\Breadcrumbs;
class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acceptsWebP = strpos(request()->header('accept'), 'image/webp') !== false;

        SEOMeta::setTitle('Производители');
        SEOMeta::setDescription('Список производителей, продукция которых поставляется ООО "Кевтек"');
        SEOMeta::setKeywords('Производители, бренды, вендоры');
        return view('front.vendor.index', ['acceptsWebP' => $acceptsWebP]);
    }


    /**
     * Display the specified resource.
     */
    public function show($slug)
    {

        $vendor = Vendor::published()->where('slug', $slug)->firstOrFail();
        //$products = $vendor->products()->paginate(12)->withQueryString();
        //$products = checkInCartAndFavourites($products);
        //   dd( $products );

        $title = 'Производитель ' . $vendor->name;
        if ($vendor->name != $vendor->short_name) {
            $title = $title . ' - ' . $vendor->short_name . ' (' . $vendor->country->name . ')';
        }
        else {
            $title = $title . ' (' . $vendor->country->name . ')';
        }

        // Теперь передаем объект модели в метод
        Breadcrumbs::for('vendor.show', function ($trail) use ($vendor) {
        $trail->parent('vendors.index');
        $trail->push($vendor->name, route('vendors.show', $vendor->slug));
    });


        SEOMeta::setTitle($title);
       // SEOMeta::setDescription('Список производителей');
       // SEOMeta::setKeywords('Производители бренды вендоры');
        return view('front.vendor.show', ['vendor' => $vendor, 'title' => $title]);
    }




}
