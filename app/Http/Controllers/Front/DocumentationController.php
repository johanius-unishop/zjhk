<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index()
    {
        $acceptsWebP = strpos(request()->header('accept'), 'image/webp') !== false;
        return view('front.documentation.index', ['acceptsWebP' => $acceptsWebP ]);
    }
}
