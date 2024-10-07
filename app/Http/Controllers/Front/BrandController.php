<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
 use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\ViewModels\ProductViewModel;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        SEOMeta::setTitle('Наши бренды');
        SEOMeta::setDescription('Бренды нашего сайта');
        SEOMeta::setKeywords('Бренды новинки анонсы');
        $items = Vendor::published()->paginate(10)->withQueryString();
        $items->load('media');
        //   dd( $news);

        $data = [
            'items' => $items,
        ];

        return view('front.vendor.index', ['data' => $data]);
    }

}
