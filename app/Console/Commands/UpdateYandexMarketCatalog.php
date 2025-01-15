<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductTypeProperty;
use App\Models\Setting;
use DOMDocument;

class UpdateYandexMarketCatalog extends Command
{
    /**
     * Имя и сигнатура консольной команды.
     *
     * @var string
     */
    protected $signature = 'yandexMarket:update-catalog';

    /**
     * Описание консольной команды.
     *
     * @var string
     */
    protected $description = 'Формирование файла xml с данными по товарам (каталог) для ЯндексМаркета';

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



//Создаем выгрузку "Каталог" для ЯндексМаркета 
                $catalogForYMFileName = Setting::where('group', 'YM')
                ->where('key', 'catalogForYMFileName')
                ->first();

                if ($catalogForYMFileName === null) {
                    // Если записи нет, создаем новую с значением 'ya_market_catalog.xml'
                    $newSetting = new Setting();
                    $newSetting->group = 'YM';
                    $newSetting->key = 'catalogForYMFileName';
                    $newSetting->value = 'ya_market_catalog.xml';
                    
                    // Сохраняем новую запись
                    $newSetting->save();

                    $catalogForYMFileName = Setting::where('group', 'YM')
                        ->where('key', 'catalogForYMFileName')
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

                $ymStandartPriceMultiplier = Setting::where('group', 'YM')
                    ->where('key', 'ymStandartPriceMultiplier')
                    ->first();

                    if ($ymStandartPriceMultiplier === null) {
                        // Если записи нет, создаем новую с значением 1.5 
                        $newSetting = new Setting();
                        $newSetting->group = 'YM';
                        $newSetting->key = 'ymStandartPriceMultiplier';
                        $newSetting->value = '1.5';
                        
                        // Сохраняем новую запись
                        $newSetting->save();

                        $ymStandartPriceMultiplier = Setting::where('group', 'YM')
                            ->where('key', 'ymStandartPriceMultiplier')
                            ->first();
                    }

                $ymPriceMultiplier = Setting::where('group', 'YM')
                    ->where('key', 'ymPriceMultiplier')
                    ->first();

                    if ($ymPriceMultiplier === null) {
                        // Если записи нет, создаем новую с значением 1.15 
                        $newSetting = new Setting();
                        $newSetting->group = 'YM';
                        $newSetting->key = 'ymPriceMultiplier';
                        $newSetting->value = '1.15';
                        
                        // Сохраняем новую запись
                        $newSetting->save();

                        $ymPriceMultiplier = Setting::where('group', 'YM')
                            ->where('key', 'ymPriceMultiplier')
                            ->first();
                    }

                $ymOldPriceMultiplier = Setting::where('group', 'YM')
                    ->where('key', 'ymOldPriceMultiplier')
                    ->first();

                    if ($ymOldPriceMultiplier === null) {
                        // Если записи нет, создаем новую с значением 1.15 
                        $newSetting = new Setting();
                        $newSetting->group = 'YM';
                        $newSetting->key = 'ymOldPriceMultiplier';
                        $newSetting->value = '1.35';
                        
                        // Сохраняем новую запись
                        $newSetting->save();

                        $ymOldPriceMultiplier = Setting::where('group', 'YM')
                            ->where('key', 'ymOldPriceMultiplier')
                            ->first();
                    }

                $ymCofinancePriceMultiplier = Setting::where('group', 'YM')
                    ->where('key', 'ymCofinancePriceMultiplier')
                    ->first();

                    if ($ymCofinancePriceMultiplier === null) {
                        // Если записи нет, создаем новую с значением 1.15 
                        $newSetting = new Setting();
                        $newSetting->group = 'YM';
                        $newSetting->key = 'ymCofinancePriceMultiplier';
                        $newSetting->value = '1.35';
                        
                        // Сохраняем новую запись
                        $newSetting->save();

                        $ymCofinancePriceMultiplier = Setting::where('group', 'YM')
                            ->where('key', 'ymCofinancePriceMultiplier')
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
                $platform = $shop->appendChild($dom->createElement('platform', 'Kevtek System'));
                $version = $shop->appendChild($dom->createElement('version', '1.0'));
                $email = $shop->appendChild($dom->createElement('email', 'info@kevtek.ru'));
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
                $products_ym = Product::where('ym', 1)->where('published', 1)->get();

                foreach ($products_ym as $product_ym) {
                    $images = $product_ym->getMedia('images')
                            ->sortBy('order_column') // Используем sortBy для сортировки коллекции
                            ->values();//'images'
                    if (count($images) > 0 && !empty($product_ym->barcode)) {

                        $offer = $offers->appendChild($dom->createElement('offer'));
                        $offer->setAttribute('id', $product_ym->id);

                        $product_type = $product_ym->product_type;
                        $name = $product_ym->name;
                        $article = $product_ym->article;
                        $vendor = $product_ym->vendor->short_name;//[$product_ym->vendor_id];
                        if (!empty($product_ym->article) && trim($product_ym->article) != trim($product_ym->name)) {
                            $full_name = $product_type . ' ' . $vendor . ' ' . $name . ' (' . $article . ')';
                        }
                        else {
                            $full_name = $product_type . ' ' . $vendor . ' ' . $name;
                        }

                        $full_name_ym = $offer->appendChild($dom->createElement('name', $full_name));

                        $vendor_ym = $offer->appendChild($dom->createElement('vendor', trim($vendor)));
                        $vendorCode = $offer->appendChild($dom->createElement('vendorCode', trim($product_ym->article)));
                        $categoryId = $offer->appendChild($dom->createElement('categoryId', trim($product_ym->category_id)));
                        
                        foreach ($images as $image) {
                            $imageUrl = $image->getFullUrl();
                            $picture = $offer->appendChild($dom->createElement('picture', $imageUrl));
                        }


                        $productId = $product_ym->id;
                        $productTypeId = $product_ym->product_type_id;
                        $data = '';
                        $data = ProductTypeProperty::query()
                            ->leftJoin('product_property_values', function($join) use ($productId) {
                            $join->on('product_type_properties.id', '=', 'product_property_values.product_type_property_id')
                            ->where('product_property_values.product_id', '=', $productId);
                            })
                        ->leftJoin('product_type_property_values', 'product_property_values.product_type_property_value_id', '=', 'product_type_property_values.id')
                        ->where('product_type_properties.product_type_id', '=', $productTypeId)
                        ->orderBy('product_type_properties.order_column', 'desc')
                        ->select([
                            'product_type_properties.name as characteristic_name',
                            'product_type_properties.section as section',
                            'product_type_property_values.value as characteristic_value',
                        ])->get();

                        $data_array = [];
                        $section_visible = 0;
                        foreach ($data as $data_string) {
                            if ($data_string->section == 0) {
                                if (!empty($data_string->characteristic_value)){
                                    $data_array[] = [
                                        'name' => $data_string->characteristic_name, 
                                        'value' => $data_string->characteristic_value,
                                        'section' => $data_string->section,
                                        'visible' => 1];
                                    $section_visible = 1;
                                }
                                if (empty($data_string->characteristic_value)){
                                    $data_array[] = [
                                        'name' => $data_string->characteristic_name, 
                                        'value' => $data_string->characteristic_value,
                                        'section' => $data_string->section,
                                        'visible' => 0];
                                }
                            }
                            
                            if ($data_string->section == 1) {
                                if ($section_visible == 1){
                                    $data_array[] = [
                                        'name' => $data_string->characteristic_name, 
                                        'value' => $data_string->characteristic_value,
                                        'section' => $data_string->section,
                                        'visible' => 1];
                                    $section_visible = 0;
                                }
                                else {
                                    $data_array[] = [
                                        'name' => $data_string->characteristic_name, 
                                        'value' => $data_string->characteristic_value,
                                        'section' => $data_string->section,
                                        'visible' => 0];
                                }

                            }
                        }

                        $reversedDataArray = array_reverse($data_array);

                        

                        
                        // Здесь нужно формировать description
                        $description_ym = '';
                        $description_ym = '<h3>' . $full_name . '</h3>';
                        if (!empty(trim($product_ym->short_description))){
                        $description_ym .= '<p>' . $product_ym->short_description . '</p>';
                        }


                        $listItems = [];
                        $previous_html_tag = '';
                        foreach ($reversedDataArray as $data_ym) {
                            if ($data_ym['visible'] == 1) {
                                if ($previous_html_tag == ''){
                                    if ($data_ym['section'] == 0){
                                        $listItems[] = '<ul><li>' . $data_ym['name'] . ': ' . $data_ym['value'] . '</li>';
                                        $previous_html_tag = '</li>';
                                    }
                                    if ($data_ym['section'] == 1){
                                        $listItems[] = '<p><strong>' . $data_ym['name'] . '</strong></p>';
                                        $previous_html_tag = '</strong>';
                                    }
                                }
                                else{

                                    if ($previous_html_tag == '</strong>'){
                                        if ($data_ym['section'] == 0){
                                            $listItems[] = '<ul><li>' . $data_ym['name'] . ': ' . $data_ym['value'] . '</li>';
                                            $previous_html_tag = '</li>';
                                        }
                                    }
                                    else {

                                        if ($previous_html_tag == '</li>'){
                                            if ($data_ym['section'] == 0){
                                                $listItems[] = '<li>' . $data_ym['name'] . ': ' . $data_ym['value'] . '</li>';
                                                $previous_html_tag = '</li>';
                                            }
                                            if ($data_ym['section'] == 1){
                                                $listItems[] = '</ul><p><strong>' . $data_ym['name'] . '</strong></p>';
                                                $previous_html_tag = '</strong>';
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        if (count($listItems) > 0)
                        {
                            $description_ym .= '<h4>Технические характеристики:</h4>';
                        }

                        $description_ym .= implode('', $listItems);
                        
                        if ($previous_html_tag == '</li>'){
                            $description_ym .= '</ul>';
                        }

                        $description = $offer->appendChild($dom->createElement('description'));
                        $cdataNode = $dom->createCDATASection($description_ym);
                        $description->appendChild($cdataNode);

                        $manufacturer_warranty = $offer->appendChild($dom->createElement('manufacturer_warranty', $product_ym->ym_manufacturer_warranty));
                        
                        if (!empty($product_ym->country->name)) {
                            $country_of_origin = $offer->appendChild($dom->createElement('country_of_origin', $product_ym->country->name));
                        }
                        else {
                            $country_of_origin = $offer->appendChild($dom->createElement('country_of_origin', $product_ym->vendor->country->name));
                        }

                        $barcode = $offer->appendChild($dom->createElement('barcode', $product_ym->barcode));

                        // Вес
                        if (!empty($product_ym->package_weight)) {
                            $weight_ym = round($product_ym->package_weight * $product_ym->ym_quantity_set, 3);
                            $weight = $offer->appendChild($dom->createElement('weight', $weight_ym));
                        }
                        // Здесь нужно рассчитывать цену, старую цену и цену софинансирования
                        if (!empty($product_ym->ym_personal_price_multiplier)) {
                            $ym_price_multiplier = $product_ym->ym_personal_price_multiplier;
                        }
                        else {
                            $ym_price_multiplier = (float)$ymStandartPriceMultiplier->value;
                        }
                        $price_ym = $product_ym->price * $product_ym->ym_quantity_set * $ym_price_multiplier * $ymPriceMultiplier->value;
                        $price = $offer->appendChild($dom->createElement('price', (int)$price_ym));

                        $old_price_ym = (int)$product_ym->price * $product_ym->ym_quantity_set * $ym_price_multiplier * $ymOldPriceMultiplier->value;
                        $oldprice = $offer->appendChild($dom->createElement('oldprice', (int)$old_price_ym));

                        $cofinance_price_ym = (int)$product_ym->price * $product_ym->ym_quantity_set * $ym_price_multiplier * $ymCofinancePriceMultiplier->value;
                        $cofinance_price = $offer->appendChild($dom->createElement('cofinance_price', (int)$cofinance_price_ym));

                        $enable_auto_discounts = $offer->appendChild($dom->createElement('enable_auto_discounts', $product_ym->ym_enable_auto_discounts));

                        //Всегда RUR
                        $currencyId = $offer->appendChild($dom->createElement('currencyId', 'RUR'));

                        // Здесь нужно формировать строку размеров
                        if (!empty($product_ym->width) && !empty($product_ym->height) && !empty($product_ym->length)) {
                            $dimensions_ym = round($product_ym->package_width, 2) . '/' . round($product_ym->package_height, 2) . '/' . round($product_ym->package_length, 2);
                            $dimensions = $offer->appendChild($dom->createElement('dimensions', $dimensions_ym));
                        }

                        $service_life_days = $offer->appendChild($dom->createElement('service-life-days', $product_ym->ym_service_life_days));
                        $comment_life_days = $offer->appendChild($dom->createElement('comment-life-days', $product_ym->ym_comment_life_days));
                        $warranty_days = $offer->appendChild($dom->createElement('warranty-days', $product_ym->ym_warranty_days));


                    }

                }



                $pathToXmlFile = public_path("uploads/$catalogForYMFileName->value");

                // Включаем форматирование вывода
                $dom->preserveWhiteSpace = false;
                $dom->substituteEntities = false;
                $dom->formatOutput = true;
                // Сохраняем XML документ
                $dom->save($pathToXmlFile); 
    }
}
