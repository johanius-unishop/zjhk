<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Получаем настройки главной страницы
        $mainPageSettings = $this->getSettings();

        dd($mainPageSettings);
        // Возвращаем представление с данными
        return view('home', compact('mainPageSettings '));
    }

    private function getSettings()
    {
        // Получаем все записи из таблицы settings, где group = "company"
        $settings = Setting::where('group', 'mainPage')->pluck('value', 'key');

        // Преобразуем результат в массив
        return $settings->toArray();
    }
}
