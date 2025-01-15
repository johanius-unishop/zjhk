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
        // Получаем настройки компании
        $company = $this->getCompanySettings();

        // Возвращаем представление с данными
        return view('home', compact('company'));
    }

    private function getCompanySettings()
    {
        // Получаем все записи из таблицы settings, где group = "company"
        $companySettings = Setting::where('group', 'company')->pluck('value', 'key');

        // Преобразуем результат в массив
        return $companySettings->toArray();
    }
}