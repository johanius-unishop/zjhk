<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Category;
use App\Models\Setting;
use DOMDocument;

class UpdateYmlCatalog extends Command
{
    /**
     * Имя и сигнатура консольной команды.
     *
     * @var string
     */
    protected $signature = 'yml:update-catalog';

    /**
     * Описание консольной команды.
     *
     * @var string
     */
    protected $description = 'Формирование файла xml для выгрузки каталога';

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
                $ymlCatalogFileName = Setting::where('group', 'yml')
                ->where('key', 'ymlCatalogFileName')
                ->first();

                if ($ymlCatalogFileName === null) {
                    // Если записи нет, создаем новую с значением 'yml_catalog.xml'
                    $newSetting = new Setting();
                    $newSetting->group = 'yml';
                    $newSetting->key = 'ymlCatalogFileName';
                    $newSetting->value = 'yml_catalog.xml';

                    // Сохраняем новую запись
                    $newSetting->save();

                    $ymlCatalogFileName = Setting::where('group', 'yml')
                        ->where('key', 'ymlCatalogFileName')
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


                $currencies = $shop->appendChild($dom->createElement('currencies'));
                $currency = $currencies->appendChild($dom->createElement('currency'));
                $currency->setAttribute('id', 'RUR');
                $currency->setAttribute('rate', '1');

                $categories = $shop->appendChild($dom->createElement('categories'));

                $categories_ym = Category::all();

                foreach ($categories_ym as $category_ym) {
                    // Создаем узел category
                    $category = $dom->createElement('category', $category_ym->name);
                    $category->setAttribute('id', $category_ym->id);
                    if ($category_ym->parent_id !== null) {
                        $category->setAttribute('parentId', $category_ym->parent_id);
                    }

                    // Добавляем offer к offers
                    $categories->appendChild($category);
                }

                // Создаем узел offers
                $offers = $shop->appendChild($dom->createElement('offers'));

                // Получаем данные из таблицы products
                $products_yml = Product::where('composite_product', 0)->where('published', 1)->get();

                foreach ($products_yml as $product) {

                    $images = $product->getMedia('images')
                            ->sortBy('order_column') // Используем sortBy для сортировки коллекции
                            ->values();

                    // Создаем узел offer
                    $offer = $dom->createElement('offer');
                    $offer->setAttribute('id', $product->id);

                    $name = $product->name;
                    $article = $product->article;
                    $vendor = $product->vendor->short_name;
                    if (!empty($product->article) && trim($product->article) != trim($product->name)) {
                        $full_name = $name . ' (' . $article . ')';
                    }
                    else {
                        $full_name = $name;
                    }

                    $full_name_yml = $offer->appendChild($dom->createElement('name', $full_name));

                    $vendor_yml = $offer->appendChild($dom->createElement('vendor', trim($vendor)));
                    if (!empty(trim($product->article))){
                        $vendorCode = $offer->appendChild($dom->createElement('vendorCode', trim($product->article)));
                    }
                    else {
                        $vendorCode = $offer->appendChild($dom->createElement('vendorCode', trim($product->name)));
                    }

                    //*****url
                    $url = $offer->appendChild($dom->createElement('url', $product->front_url));

                    if (!empty($product->special_price) && $product->special_price > 0 && $product->special_price < $product->price){
                        $price = $offer->appendChild($dom->createElement('price', $product->special_price));
                        $oldprice = $offer->appendChild($dom->createElement('oldprice', $product->price));
                    }
                    else {
                        $price = $offer->appendChild($dom->createElement('price', $product->price));
                    }

                    $currencyId = $offer->appendChild($dom->createElement('currencyId', 'RUR'));

                    $categoryId = $offer->appendChild($dom->createElement('categoryId', trim($product->category_id)));

                    foreach ($images as $image) {
                        $imageUrl = $image->getFullUrl();
                        $picture = $offer->appendChild($dom->createElement('picture', $imageUrl));
                    }

                    $description_ym = '';

                    if (!empty(trim($product->short_description))){
                        $description_ym .= $product->short_description;
                        }

                    $description = $offer->appendChild($dom->createElement('description'));
                    $cdataNode = $dom->createCDATASection($description_ym);
                    $description->appendChild($cdataNode);

                    $product_props = $product->getProperties();

                    foreach ($product_props as $param) {
                        if (!empty($param["characteristic_value"])) { // Проверяем наличие значения
                            $paramElement = $dom->createElement('param', $param["characteristic_value"]);
                            $paramElement->setAttribute('name', $param["characteristic_name"]);
                            $offer->appendChild($paramElement); // Добавляем узел только если значение присутствует
                        }
                    }


                    $in_stock_value = $product->stock;
                    $in_stock_value = $in_stock_value < 0 ? 0 : $in_stock_value;

                    $count = $offer->appendChild($dom->createElement('count', $in_stock_value));


                    // Добавляем offer к offers
                    $offers->appendChild($offer);
                }

                $pathToXmlFile = public_path("uploads/$ymlCatalogFileName->value");

                // Включаем форматирование вывода
                $dom->preserveWhiteSpace = false;
                $dom->substituteEntities = false;
                $dom->formatOutput = true;
                // Сохраняем XML документ
                $dom->save($pathToXmlFile);
    }
}
