<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Setting;
use DOMDocument;

class UpdateYandexMarketSalesTerms extends Command
{
    /**
     * Имя и сигнатура консольной команды.
     *
     * @var string
     */
    protected $signature = 'yandexMarket:update-sales-terms';

    /**
     * Описание консольной команды.
     *
     * @var string
     */
    protected $description = 'Формирование файла xml для выгрузки условий продажи (товарных остатков) на ЯндексМаркет';

    /**
     * Путь к файлу отчета.
     *
     * @var string
     */
    protected $reportFilePath;

    /**
     * Время последнего успешного обновления остатков.
     *
     * @var int
     */

    /**
     * Создать новый экземпляр команды.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Выполнить консольную команду.
     *
     * @return int
     */
    public function handle()
    {



//Создаем выгрузку "Условия продажи в магазине" для ЯндексМаркета 
                $salesTermsForYMFileName = Setting::where('group', 'YM')
                ->where('key', 'salesTermsForYMFileName')
                ->first();

                if ($salesTermsForYMFileName === null) {
                    // Если записи нет, создаем новую с значением 'ya_market_sales_terms.xml'
                    $newSetting = new Setting();
                    $newSetting->group = 'YM';
                    $newSetting->key = 'salesTermsForYMFileName';
                    $newSetting->value = 'ya_market_sales_terms.xml';
                    
                    // Сохраняем новую запись
                    $newSetting->save();

                    $salesTermsForYMFileNamev = Setting::where('group', 'YM')
                        ->where('key', 'salesTermsForYMFileName')
                        ->first();
                }

                $ymZeroStockTransfer = Setting::where('group', 'YM')
                    ->where('key', 'ymZeroStockTransfer')
                    ->first();

                    if ($ymZeroStockTransfer === null) {
                        // Если записи нет, создаем новую с значением 0 - показываем реальные остатки
                        $newSetting = new Setting();
                        $newSetting->group = 'YM';
                        $newSetting->key = 'ymZeroStockTransfer';
                        $newSetting->value = '0';
                        
                        // Сохраняем новую запись
                        $newSetting->save();

                        $ymZeroStockTransfer = Setting::where('group', 'YM')
                            ->where('key', 'ymZeroStockTransfer')
                            ->first();
                    }



                // Создаем новый объект DOMDocument
                $dom = new DOMDocument('1.0', 'UTF-8');
                
                // Получаем текущую дату и время в нужном формате
                $currentDateTime = date('Y-m-d\TH:i:sP'); // Формат: Y-m-d\TH:i:sP

                // Создаем корневой узел
                $root = $dom->appendChild($dom->createElement('yml_catalog'));
                $root->setAttribute('date', $currentDateTime);    
                
                // Создаем узел shop
                $shop = $root->appendChild($dom->createElement('shop'));
                
                // Создаем дочерние узлы
                $name = $shop->appendChild($dom->createElement('name', 'KevTek'));
                $company = $shop->appendChild($dom->createElement('company', 'KevTek LLC'));
                $url = $shop->appendChild($dom->createElement('url', 'https://kevtek.ru'));
                $platform = $shop->appendChild($dom->createElement('platform', 'Kevtek_system'));
                $version = $shop->appendChild($dom->createElement('version', '1.0'));
                $email = $shop->appendChild($dom->createElement('email', 'info@kevtek.ru'));
                $delivery = $shop->appendChild($dom->createElement('delivery', 'false'));
                $pickup = $shop->appendChild($dom->createElement('pickup', 'false'));




                
                // Создаем узел offers
                $offers = $shop->appendChild($dom->createElement('offers'));

                // Получаем данные из таблицы products
                $products_ym = Product::where('ym', 1)->get();

                foreach ($products_ym as $product) {
                    // Создаем узел offer
                    $offer = $dom->createElement('offer');
                    $offer->setAttribute('id', $product->id);

                    $enable_auto_discounts = $offer->appendChild($dom->createElement('enable_auto_discounts', 'true'));
                    $vat = $offer->appendChild($dom->createElement('vat', 'NO_VAT'));
                    $delivery = $offer->appendChild($dom->createElement('delivery', 'false'));
                    $pickup = $offer->appendChild($dom->createElement('pickup', 'false'));

                    $in_stock_value = $ymZeroStockTransfer->value ? '0' : intval($product->stock / $product->ym_quantity_set);
                    $in_stock_value = $in_stock_value < 0 ? 0 : $in_stock_value;

                    $count = $offer->appendChild($dom->createElement('count', $in_stock_value));
                    

                    // Добавляем offer к offers
                    $offers->appendChild($offer);
                }

                $pathToXmlFile = public_path("uploads/$salesTermsForYMFileName->value");

                // Включаем форматирование вывода
                $dom->preserveWhiteSpace = false;
                $dom->substituteEntities = false;
                $dom->formatOutput = true;
                // Сохраняем XML документ
                $dom->save($pathToXmlFile);
    }
}