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

        $vendors = Vendor::published()->paginate(perPage: 10)->withQueryString();
        $vendors->load('media');
        //   dd( $news);

        $data = [
            'items' => $vendors,
        ];

        SEOMeta::setTitle('Производители');
        SEOMeta::setDescription('Список производителей');
        SEOMeta::setKeywords('Производители бренды вендоры');
        return view('front.vendor.index', ['data' => $data]);

    }



    /**
     * Display the specified resource.
     */
    public function show($slug)
    {

        $vendor   = Vendor::published()->where('slug', $slug)->firstOrFail();
        $products = $vendor->product() ->paginate(12)->withQueryString();
        $products = checkInCartAndFavourites($products);
        //   dd( $products );
        $data     = [
            'vendor' => $vendor,
            'products' => $products,
        ];

        $title = 'Производитель ' . (trim($vendor->short_name) ?: $vendor->name);
        SEOMeta::setTitle($title);
       // SEOMeta::setDescription('Список производителей');
       // SEOMeta::setKeywords('Производители бренды вендоры');
        return view('front.vendor.show', ['data' => $data]);
    }




}
