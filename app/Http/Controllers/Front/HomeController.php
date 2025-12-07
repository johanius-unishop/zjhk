<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\PopularProduct;
use App\Models\Documentation;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Получаем настройки главной страницы
        $mainPageSettings = $this->getSettings();
        $popularProductsWithDetails = PopularProduct::with('product')->get();
        $documentations = Documentation::where('homepage_visible', '=', 1)
                             ->orderBy('order_column', 'asc')
                             ->get();
        $acceptsWebP = strpos(request()->header('accept'), 'image/webp') !== false;

        // Возвращаем представление с данными
        return view('home', compact('mainPageSettings', 'documentations', 'popularProductsWithDetails', 'acceptsWebP'));
    }

    private function getSettings()
    {
        // Получаем все записи из таблицы settings, где group = "company"
        $settings = Setting::where('group', 'mainPage')->pluck('value', 'key');

        // Преобразуем результат в массив
        return $settings->toArray();
    }
}
