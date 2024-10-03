<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Faq;
 use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\ViewModels\ProductViewModel;

class FaqController extends Controller
{
    public function show( )
    {
        $data= Faq::published()->ordered()->get();
        // dd($data);
        return view('front.faq.show', ['data' => $data]);

     }

}
