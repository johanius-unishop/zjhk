<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Setting;
use DOMDocument;

class UpdateOzonStock extends Command
{
    /**
     * Имя и сигнатура консольной команды.
     *
     * @var string
     */
    protected $signature = 'ozon:update-stock';

    /**
     * Описание консольной команды.
     *
     * @var string
     */
    protected $description = 'Формирование файла xml для выгрузки товарных остатков на OZON';

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
        //Создаем выгрузку остатков для OZON
        $stockForOzonFileName = Setting::where('group', 'OZON')
        ->where('key', 'stockForOzonFileName')
        ->first();

        if ($stockForOzonFileName === null) {
            // Если записи нет, создаем новую с значением 'Stock_kevtek_to_ozon.xml'
            $newSetting = new Setting();
            $newSetting->group = 'OZON';
            $newSetting->key = 'stockForOzonFileName';
            $newSetting->value = 'Stock_kevtek_to_ozon.xml';
            
            // Сохраняем новую запись
            $newSetting->save();

            $stockForOzonFileName = Setting::where('group', 'OZON')
                ->where('key', 'stockForOzonFileName')
                ->first();
        }


        $ozonZeroStockTransfer = Setting::where('group', 'OZON')
        ->where('key', 'ozonZeroStockTransfer')
        ->first();

        if ($ozonZeroStockTransfer === null) {
            // Если записи нет, создаем новую с значением 0 - показываем реальные остатки
            $newSetting = new Setting();
            $newSetting->group = 'OZON';
            $newSetting->key = 'ozonZeroStockTransfer';
            $newSetting->value = '0';
            
            // Сохраняем новую запись
            $newSetting->save();

            $ozonZeroStockTransfer = Setting::where('group', 'OZON')
                ->where('key', 'ozonZeroStockTransfer')
                ->first();
        }

        // Создаем новый объект DOMDocument
        $dom = new DOMDocument('1.0', 'UTF-8');

        // Создаем корневой узел
        $root = $dom->appendChild($dom->createElement('yml_catalog'));

        // Создаем узел shop
        $shop = $root->appendChild($dom->createElement('shop'));

        // Создаем узел offers
        $offers = $shop->appendChild($dom->createElement('offers'));

        // Получаем данные из таблицы products
        $products_ozon = Product::where('ozon', 1)->get();

        foreach ($products_ozon as $product) {
            // Создаем узел offer
            $offer = $dom->createElement('offer');
            $offer->setAttribute('id', $product->article);

            // Создаем узел outlets
            $outlets = $dom->createElement('outlets');

            // Создаем узел outlet
            $outlet = $dom->createElement('outlet');
            $in_stock_value = $ozonZeroStockTransfer->value ? '0' : intval($product->stock / $product->ozon_quantity_set);
            $in_stock_value = $in_stock_value < 0 ? 0 : $in_stock_value;
            $outlet->setAttribute('instock', $in_stock_value);

            // Добавляем outlet к outlets
            $outlets->appendChild($outlet);

            // Добавляем outlets к offer
            $offer->appendChild($outlets);

            // Добавляем offer к offers
            $offers->appendChild($offer);
        }

        $pathToXmlFile = public_path("uploads/$stockForOzonFileName->value");

        // Включаем форматирование вывода
        $dom->formatOutput = true;
        // Сохраняем XML документ
        $dom->save($pathToXmlFile);
    }
}
