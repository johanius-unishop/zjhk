<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
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

        $vendor   = Vendor::published()->where('slug', $slug)->firstOrFail();
        //$products = $vendor->products()->paginate(12)->withQueryString();
        //$products = checkInCartAndFavourites($products);
        //   dd( $products );

        $title = 'Производитель ' . (trim($vendor->short_name) ?: $vendor->name);
        SEOMeta::setTitle($title);
       // SEOMeta::setDescription('Список производителей');
       // SEOMeta::setKeywords('Производители бренды вендоры');
        return view('front.vendor.show', ['vendor' => $vendor]);
    }




}
