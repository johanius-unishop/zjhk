<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductTypeProperty;
use App\Models\Setting;
use DOMDocument;

class UpdateYandexProductSearch extends Command
{
    /**
     * Имя и сигнатура консольной команды.
     *
     * @var string
     */
    protected $signature = 'yandex:update-product-search';

    /**
     * Описание консольной команды.
     *
     * @var string
     */
    protected $description = 'Формирование файла xml с данными по товарам для товарного поиска';

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

//Создаем выгрузку xml-файл для товарного поиска 
                $yandexProductSearchFileName = Setting::where('group', 'yandexSearch')
                ->where('key', 'yandexProductSearchFileName')
                ->first();

                if ($yandexProductSearchFileName === null) {
                    // Если записи нет, создаем новую с значением 'kevtek_yandex_product_search.xml'
                    $newSetting = new Setting();
                    $newSetting->group = 'yandexSearch';
                    $newSetting->key = 'yandexProductSearchFileName';
                    $newSetting->value = 'kevtek_yandex_product_search.xml';
                    
                    // Сохраняем новую запись
                    $newSetting->save();

                    $yandexProductSearchFileName = Setting::where('group', 'yandexSearch')
                        ->where('key', 'yandexProductSearchFileName')
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

                $offers = $shop->appendChild($dom->createElement('offers'));

                // Получаем данные из таблицы products
                $products_ym = Product::where('price', '>', 0)->where('published', 1)->get();

                foreach ($products_ym as $product_ym) {
                    $images = $product_ym->getMedia('images')
                            ->sortBy('order_column') // Используем sortBy для сортировки коллекции
                            ->values();//'images'
                    if (count($images) > 0 && !empty($product_ym->barcode)) {

                        $offer = $offers->appendChild($dom->createElement('offer'));
                        $offer->setAttribute('id', $product_ym->id);
                        $offer->setAttribute('available', 'true');

                        $name = $product_ym->name;
                        $article = $product_ym->article;
                        $vendor = $product_ym->vendor->short_name;
                        if (!empty($product_ym->article) && trim($product_ym->article) != trim($product_ym->name)) {
                            $full_name = $name . ' (' . $article . ')';
                        }
                        else {
                            $full_name = $name;
                        }

                        $full_name_ym = $offer->appendChild($dom->createElement('name', $full_name));

                        $vendor_ym = $offer->appendChild($dom->createElement('vendor', trim($vendor)));
                        if (!empty(trim($product_ym->article))){
                            $vendorCode = $offer->appendChild($dom->createElement('vendorCode', trim($product_ym->article)));
                        }
                        else{
                            $vendorCode = $offer->appendChild($dom->createElement('vendorCode', trim($product_ym->name)));
                        }
                        
                        
                        //*****url
                        $url = $offer->appendChild($dom->createElement('url', $product_ym->front_url));
                        
                        
                        if (!empty($product_ym->special_price) && $product_ym->special_price > 0 && $product_ym->special_price < $product_ym->price){
                            $price = $offer->appendChild($dom->createElement('price', $product_ym->special_price));
                            $oldprice = $offer->appendChild($dom->createElement('oldprice', $product_ym->price));
                        }
                        else{
                            $price = $offer->appendChild($dom->createElement('price', $product_ym->price));
                        }
                        
                        $currencyId = $offer->appendChild($dom->createElement('currencyId', 'RUR'));

                        $categoryId = $offer->appendChild($dom->createElement('categoryId', trim($product_ym->category_id)));
                        
                        foreach ($images as $image) {
                            $imageUrl = $image->getFullUrl();
                            $picture = $offer->appendChild($dom->createElement('picture', $imageUrl));
                        }


                        
                        $description_ym = '';
                        
                        if (!empty(trim($product_ym->short_description))){
                        $description_ym .= $product_ym->short_description;
                        }

                        $description = $offer->appendChild($dom->createElement('description'));
                        $cdataNode = $dom->createCDATASection($description_ym);
                        $description->appendChild($cdataNode);

                    }

                }



                $pathToXmlFile = public_path("uploads/$yandexProductSearchFileName->value");

                // Включаем форматирование вывода
                $dom->preserveWhiteSpace = false;
                $dom->substituteEntities = false;
                $dom->formatOutput = true;
                // Сохраняем XML документ
                $dom->save($pathToXmlFile); 
    }
}
