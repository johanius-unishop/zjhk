<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\AdditionalSetting;
use App\Models\Vendor;
use App\Models\Order;
use App\Models\OrderComposition;
use App\Models\Currency;
use Illuminate\Support\Facades\DB;


use App\Models\ProductType;
use App\Models\ProductTypeProperty;
use App\Models\ProductPropertyValue;

use App\Models\Product;
use App\Models\ProductTypePropertyValue;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\DataValidation;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Illuminate\Support\Facades\Log;


class ImportController extends Controller
{
    public function index()
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $productTypes = ProductType::orderBy('name', 'asc')->get();
        return view('admin.import.index', ['productTypes' => $productTypes]);
    }


    

    public function import_price_from_xls(Request $request)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $settings = AdditionalSetting::where('group', 'priceListImport')
                             ->pluck('value', 'name')
                             ->all();
        $startRow = intval($settings['startRowData']); // Преобразуем значение startRowData в целое число
        $vendorCol = $settings['vendorColumn'];
        $modelCol = $settings['modelColumn'];
        $articleCol = $settings['articleColumn'];
        $priceCol = $settings['priceColumn'];
        $currencyCol = $settings['currencyColumn'];
        $moqCol = $settings['moqColumn'];
        $piecesPerPackCol = $settings['piecesPerPackColumn'];
        $minStockCol = $settings['minStockColumn'];
        $priorityCol = $settings['priorityColumn'];

        $request->validate([
            'xls_file' => 'required|mimes:xls,xlsx'
        ]);

        $path = $request->file('xls_file')->getRealPath();

        try {
            // Загружаем файл
            $spreadsheet = IOFactory::load($path);
        }
        catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }

        // Получаем первый лист
        $worksheet = $spreadsheet->getActiveSheet();

        // Преобразуем лист в массив, начиная с третьей строки
        $dataRows = $worksheet->toArray(null, true, false, true); // Здесь True указывает, что нумерация ячеек начинается с 1
        $relevantData = array_slice($dataRows, $startRow-1); // Пропускаем первые две строки

        $vendorColumnValues = []; // Массив для хранения значений столбца vendor (производитель)
        $currencyColumnValues = []; // Массив для хранения значений столбца currency (валюта)

        foreach ($relevantData as $row) {
            if (!empty($row[$vendorCol])) {
                $vendorColumnValues[] = trim($row[$vendorCol]);
            }
        }
        foreach ($relevantData as $row) {
            if (!empty($row[$currencyCol])) {
                $currencyColumnValues[] = trim($row[$currencyCol]);
            }
        }

        // Получение уникальных значений
        $uniqueVendorColumnValues = array_unique($vendorColumnValues);
        $uniqueCurrencyColumnValues = array_unique($currencyColumnValues);

        //Если в БД нет бренда, который встретился в прайс листе, то создаем такой бренд
        foreach ($uniqueVendorColumnValues as $vendor){
            if (Vendor::where('short_name', $vendor)->doesntExist()) {
                Vendor::create([
                    'short_name' => trim($vendor),
                    'name' => trim($vendor),
                    'published' => '1'
                ]);
            } 
        }
        //Если в БД нет валюты, которая встретилась в прайс листе, то создаем такую валюту
        foreach ($uniqueCurrencyColumnValues as $currency){
            if (Currency::where('charcode', $currency)->doesntExist()) {
                Currency::create([
                    'charcode' => trim($currency),
                    'name' => trim($currency)
                ]);
            } 
        }

        $vendorIds = Vendor::whereIn('short_name', $uniqueVendorColumnValues)->pluck('id', 'short_name')->all();
        $currencyIds = Currency::whereIn('charcode', $uniqueCurrencyColumnValues)->pluck('id', 'charcode')->all();

        foreach ($relevantData as $row) {
                        
            if (!empty($row[$vendorCol]) && !empty($row[$modelCol])) {

                Product::updateOrCreate(
                    [
                        'vendor_id' => trim($vendorIds[$row[$vendorCol]]),
                        'name' => trim($row[$modelCol]),
                    ],    
                    [
                        'vendor_id' => trim($vendorIds[$row[$vendorCol]]),
                        'name' => trim($row[$modelCol]),
                        'article' => empty($row[$articleCol]) ? "" : trim($row[$articleCol]),
                        'supplier_price' => empty($row[$priceCol]) ? null : trim($row[$priceCol]),
                        'currency_id' => trim($currencyIds[$row[$currencyCol]]),
                        'moq_supplier' => empty($row[$moqCol]) ? null : trim($row[$moqCol]),
                        'pieces_per_pack' => empty($row[$piecesPerPackCol]) ? null : trim($row[$piecesPerPackCol]),
                        'minimum_stock' => empty($row[$minStockCol]) ? null : trim($row[$minStockCol]),
                        'priority' => empty($row[$priorityCol]) ? null :trim($row[$priorityCol]),
                    ]
                    );
                }
            }
        return back()->with('success', 'Прайс-лист успешно загружен.');
    }
    
    public function export_products_properties_values_to_xls(Request $request)
    {
        $productType = ProductType::where('id', $request->productType)->first();
        if ($productType){
        $properties = ProductTypeProperty::where('product_type_id', $productType->id)->orderBy('order_column')->get();
        $products = Product::where('product_type_id', $productType->id)->with('productPropertyValues')->with('vendor')->get();
        
        // Функция для преобразования номера столбца в букву
        function columnNumberToLetter(int $columnIndex): string
        {
            $letter = '';
            while ($columnIndex > 0) {
                $modulo = ($columnIndex - 1) % 26;
                $letter = chr(65 + $modulo) . $letter;
                $columnIndex = floor(($columnIndex - $modulo) / 26);
            }
            return $letter;
        }



        // Создаем новую рабочую книгу
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Характеристики');

       
        
        
        $sheet->setCellValue('A1', $productType->name);
        $columnIndex = 5;
        $rowIndex = 2;
        $variants = [];
        $variants_value = [];
        $product_values = [];

        foreach ($properties as $property) {
                $rowIndex = 1;
                $columnLetter = columnNumberToLetter($columnIndex); // Преобразование индекса колонки в букву (A, B, C...)
                $cellCoordinate = $columnLetter . ($rowIndex); // Формирование координат ячейки (A1, B1, ...)
                $sheet->setCellValue($cellCoordinate, $property->id);

                $rowIndex = 2;
                $variants[$columnIndex] = $property->productTypePropertyValues->pluck('value')->toArray(); 
                $variants_value[$property->id] =  ProductTypePropertyValue::where('product_type_property_id', $property->id)->orderBy('value')->pluck('value', 'id')->toArray(); 
                
                $columnLetter = columnNumberToLetter($columnIndex); // Преобразование индекса колонки в букву (A, B, C...)
                $cellCoordinate = $columnLetter . ($rowIndex); // Формирование координат ячейки (A1, B1, ...)
                $sheet->setCellValue($cellCoordinate, $property->name);
                $columnIndex ++;
            }
        
        
       

        $columnIndex = 1;
        $rowIndex = 3;

        foreach ($products as $product) {
            $product_values[$product->id] = $product->productPropertyValues->pluck('product_type_property_value_id','product_type_property_id')->toArray();
            $columnIndex = 1;
            $columnLetter = columnNumberToLetter($columnIndex); // Преобразование индекса колонки в букву (A, B, C...)
            $cellCoordinate = $columnLetter . ($rowIndex); // Формирование координат ячейки (A1, B1, ...)
            $sheet->setCellValue($cellCoordinate, $product->id);
            
            $columnIndex = 2;
            $columnLetter = columnNumberToLetter($columnIndex); // Преобразование индекса колонки в букву (A, B, C...)
            $cellCoordinate = $columnLetter . ($rowIndex); // Формирование координат ячейки (A1, B1, ...)
            $sheet->setCellValue($cellCoordinate, $product->vendor->short_name);
            $columnIndex = 3;
            $columnLetter = columnNumberToLetter($columnIndex); // Преобразование индекса колонки в букву (A, B, C...)
            $cellCoordinate = $columnLetter . ($rowIndex); // Формирование координат ячейки (A1, B1, ...)
            $sheet->setCellValue($cellCoordinate, $product->name);
            $columnIndex = 4;
            $columnLetter = columnNumberToLetter($columnIndex); // Преобразование индекса колонки в букву (A, B, C...)
            $cellCoordinate = $columnLetter . ($rowIndex); // Формирование координат ячейки (A1, B1, ...)
            $sheet->setCellValue($cellCoordinate, $product->article);
            
            $rowIndex ++;
        }

        $startRowIndex = 3;
        $endRowIndex = $rowIndex-1;

      //  $sheet->mergeCells('A1:D1');
        // Применяем стиль для ячейки
        $fontStyle = [
            'font' => [
                'bold' => true,
            ],
        ];
        $sheet->getStyle('A1')->applyFromArray($fontStyle);

        // Добавляем второй лист
        $secondSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Варианты значений');
        $spreadsheet->addSheet($secondSheet);
        // Устанавливаем второй лист активным
        $sheet_1 = $spreadsheet->setActiveSheetIndex(1);
        $columnIndex = 5;
        $rowIndex = 1;

        foreach ($properties as $property) {
            if (!empty($variants[$columnIndex])){
                $columnLetter = columnNumberToLetter($columnIndex);
                
                foreach ($variants_value[$property->id] as $variant) {
                    $cellCoordinate = $columnLetter . $rowIndex;
                    $sheet_1->setCellValue($cellCoordinate, $variant);
                    $rowIndex++;
                }
                $rowIndex = 1;
            }
            $columnIndex++;
        }

        $lastColumn_1 = $sheet_1->getHighestColumn();
        $lastRow_1 = $sheet_1->getHighestRow();

        $sheet_1->getStyle('A1:' . $lastColumn_1 . $lastRow_1)->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_TEXT);

        $sheet = $spreadsheet->setActiveSheetIndex(0);


        $columnIndex = 5;
        $sourceColumnIndex = 5;

        foreach ($properties as $property) {
            if (!empty($variants[$columnIndex])) {
                $columnLetter = columnNumberToLetter($columnIndex);
                $sourceColumnLetter = columnNumberToLetter($sourceColumnIndex);
                $cellRange = $columnLetter . $startRowIndex . ':' . $columnLetter . $endRowIndex;
        
                // Определяем диапазон ячеек на втором листе, который содержит допустимые значения
                $sourceCellRange = $sourceColumnLetter . '$1' . ':' . $sourceColumnLetter . '$' . (count($variants_value[$property->id])); // Диапазон начинается со второй строки и до последней строки, где были записаны значения
                // Создаем выпадающий список, используя ссылку на диапазон ячеек на втором листе
                $validation = $sheet->getDataValidation($cellRange)
                                    ->setType(DataValidation::TYPE_LIST)
                                    ->setErrorStyle(DataValidation::STYLE_INFORMATION)
                                    ->setAllowBlank(false)
                                    ->setShowInputMessage(true)
                                    ->setShowErrorMessage(true)
                                    ->setShowDropDown(true)
                                    ->setFormula1('\'Варианты значений\'!' . $sourceCellRange); // Ссылка на другой лист
            }
            $columnIndex++;
            $sourceColumnIndex++;
        }

        
        $rowIndex = 3;
        $columnIndex = 5;

        foreach ($products as $product) {
            foreach ($properties as $property) {
                $columnLetter = columnNumberToLetter($columnIndex); // Преобразование индекса колонки в букву (A, B, C...)
                $cellCoordinate = $columnLetter . $rowIndex; // Формирование координат ячейки (A1, B1, ...)

                // Проверяем существование ключей в массивах
                if (
                    isset($variants_value[$property->id], $product_values[$product->id], $product_values[$product->id][$property->id])
                ) {
                    $product_value = $variants_value[$property->id][$product_values[$product->id][$property->id]];
                    $sheet->setCellValue($cellCoordinate, $product_value);
                }

                $columnIndex++;
            }

            $rowIndex++;
            $columnIndex = 5; // Сбрасываем индекс колонки для новой строки
        }

        // Объединяем ячейки A1:D1
        $sheet->mergeCells('A1:D1');
        // Определяем последний заполненный столбец

        $lastColumn = $sheet->getHighestColumn();
        $lastRow = $sheet->getHighestRow();
        $lastColumnIndex = Coordinate::columnIndexFromString($lastColumn);

        $sheet->getStyle('A1:' . $lastColumn . $lastRow)->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_TEXT);
        
        // Перебираем все столбцы от 'A' до максимального заполненного столбца
        for ($i = 0; $i <= $lastColumnIndex; $i++) {
            $columnID = Coordinate::stringFromColumnIndex($i); // Получаем идентификатор столбца

            // Устанавливаем автоподбор ширины для текущего столбца
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        // Закрепление первых трех столбцов и двух строк
        $sheet->freezePane('E3'); // Указываем ячейку, начиная с которой область будет прокручиваться
        

        // Сохраняем файл в память
        $writer = new Xlsx($spreadsheet);
        ob_start();
        $writer->save('php://output');
        $content = ob_get_clean();

        // Имя файла
        $filename = rawurlencode($productType->name) . '.xlsx';

        // Сначала отправляем файл клиенту
        return response($content, 200)
            ->header('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
            ->header("Content-Disposition", "attachment; filename*=UTF-8''$filename");

    }
    else {
        return back()->with('warning','Нужно выбрать "Тип товара"');
    }
    }

    public function import_products_properties_values_from_xls(Request $request)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        
        
        $request->validate([
            'xls_file1' => 'required|mimes:xls,xlsx'
        ]);

        
    
        $path = $request->file('xls_file1')->getRealPath();
        
        
        
        
        try {
            // Загружаем файл
            $spreadsheet = IOFactory::load($path);
        } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
        
        // Получаем первый лист
        $worksheet = $spreadsheet->getActiveSheet();
        // Определяем последнюю строку и последний столбец

        $variants_value = [];
        $productType = ProductType::where('name', trim($worksheet->getCell('A1')->getValue()))->first();
        
        if ($productType) {
            
            $properties = ProductTypeProperty::where('product_type_id', $productType->id)->orderBy('order_column')->with('productTypePropertyValues')->get();
            foreach ($properties as $property)
            {
                $variants_value[$property->id] =  $property->productTypePropertyValues->pluck('id', 'value')->toArray(); 
            }

            $startRowIndex = 3;
            $startColumnIndex = 5;

            $finishRowIndex = $worksheet->getHighestRow();
            $finishColumn = $worksheet->getHighestColumn();
            $finishColumnIndex = Coordinate::columnIndexFromString($finishColumn);
            
            for ($row = $startRowIndex; $row <= $finishRowIndex; $row++) {
                $product = Product::where('id', trim($worksheet->getCell('A' . $row)->getValue()))->first();
                if ($product) {
                    for ($col = $startColumnIndex; $col <= $finishColumnIndex; $col++) {
                        $property = ProductTypeProperty::where('id', trim($worksheet->getCell(Coordinate::stringFromColumnIndex($col) . '1')->getValue()))->first();
                        if ($property && $property->section == 0) {
                            $value_xls = trim($worksheet->getCell(Coordinate::stringFromColumnIndex($col) . $row));
                            if ($value_xls != "") {
                                
                                $value = $variants_value[$property->id][trim($worksheet->getCell(Coordinate::stringFromColumnIndex($col) . $row))];
                                if ($value) {
                                    $conditions = [
                                        'product_id' => $product->id,
                                        'product_type_property_id' => $property->id,
                                    ];
                                    $data = [
                                        'product_type_property_value_id' => $value,
                                    ];
                                    ProductPropertyValue::updateOrCreate($conditions, $data);
                                }
                            }
                        }
                    }
                }
            }
            return back()->with('success', 'Характеристики успешно загружены');    
        } else {
            return back()->with('warning','Файл не загружен');
        }
    }

    public function new_order(Request $request)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        
        
        $request->validate([
            'vendor_id' => 'required',
            'amount' => 'required|numeric|min:1',
        ]);

        $vendor_id = $request->vendor_id;
        $amount = $request->amount;
        $new_order_products = [];
    
        if ($vendor_id == 0) {
            // Если выбрано "Все производители", получаем все продукты
            $order_products = Product::where('composite_product', '0')->get();
        } else {
            // Если выбран конкретный производитель, фильтруем по нему
            $order_products = Product::where('composite_product', '0')->where('vendor_id', $vendor_id)->with('orders')->get();
        }

        //Получаем айдишники открытых заказов
        $open_orders = Order::where('received', '0')->pluck('id');

        //Получаем количество заказанных товаров во всех открытых заказах массив id -> total_quantity
        $open_orders_products = OrderComposition::whereIn('order_id', $open_orders)
            ->select('product_id', DB::raw('SUM(quantity) as total_quantity'))
            ->groupBy('product_id')
            ->get()
            ->keyBy('product_id')
            ->map(function($item) {
                return $item['total_quantity'];
            })
            ->toArray();
        foreach ($order_products as $product) {
            $ordered = isset($open_orders_products[$product->id]) ? $open_orders_products[$product->id] : 0;
            $minimum_stock = isset($product->minimum_stock) ? $product->minimum_stock : 0;
            
            $new_order_products[$product->id] = [
                'id' => $product->id,
                'vendor' => $product->vendor->short_name,
                'name' => $product->name,
                'stock' => $product->stock,
                'ordered' => $ordered,
                'minimum_stock' => $minimum_stock,
                'moq' => $product->moq_supplier,
                'priority' => $product->priority,
                'new_order_quantity' => 0,
                'price' => $product->supplier_price,
                'coef' => 0
            ];
        }
        
        
        //Товары которые необходимо заказать в первую очередь (заказаны покупателями и отсутствуют на складе)
        $order_products_with_negative_balance = array_filter($new_order_products, function($product) {
            return $product['stock'] < 0;
        });

        
        foreach ($order_products_with_negative_balance as $key => $product) {
            if (abs($product['stock']) <= abs($product['ordered'])) {
                $new_order_quantity = 0;
            } else {
                $new_order_quantity = (intdiv(
                    ($product['ordered'] - $product['stock']),
                    $product['moq']
                ) + 1) * $product['moq'];
            }
                
            // Сохраняем изменение непосредственно в массив
            $new_order_products[$key]['new_order_quantity'] = $new_order_quantity;
        }


        //Товары с приоритетом 1
        $order_products_one_priority = array_filter($new_order_products, function($product) {
            return $product['priority'] == 1;
        });

        

        foreach ($order_products_one_priority as $key => $product) {
            if ($product['minimum_stock'] === 0) {
                $coef = 100;
            } else {
                $coef = ($product['stock'] + $product['ordered'] + $product['new_order_quantity']) / $product['minimum_stock'];
            }
                
            // Сохраняем изменение непосредственно в массив
            $order_products_one_priority[$key]['coef'] = $coef;
        }

        

        uasort($order_products_one_priority, function($a, $b) {
            return $a['coef'] <=> $b['coef']; // Сортировка по возрастанию в поле coef
        });


        
        $amount = 0;
        while ($amount <= 10000) {
        $i = 0;
        foreach ($order_products_one_priority as $key => $product) {
            if ($i === 0) {
                $product['new_order_quantity'] = $product['new_order_quantity'] + $product['moq'];
                $order_products_one_priority[$key]['new_order_quantity'] = $product['new_order_quantity'];
                $amount_part = $product['moq'] * $product['price'];
                $i++;
                if ($product['minimum_stock'] === 0) {
                    $coef = 100;
                } else {
                    $coef = ($product['stock'] + $product['ordered'] + $product['new_order_quantity']) / $product['minimum_stock'];
                }
                // Сохраняем изменение непосредственно в массив
                $order_products_one_priority[$key]['coef'] = $coef;
            }    
        }
        uasort($order_products_one_priority, function($a, $b) {
            return $a['coef'] <=> $b['coef']; // Сортировка по возрастанию в поле coef
        });

            $amount = $amount + $amount_part;
            $i = 0;
        }
        
        foreach ($order_products_one_priority as $key => $product) {
            $new_order_products[$key]['new_order_quantity'] = $product['new_order_quantity'];
        }

        $list_order_products = array_filter($new_order_products, function($product) {
            return $product['new_order_quantity'] > 0;
        });


        //Товары с приоритетом 2
        $order_products_two_priority = $order_products->where('priority', '2');
        //Товары с приоритетом 3
        $order_products_three_priority = $order_products->where('priority', '3');
        //Товары с приоритетом 4
        $order_products_four_priority = $order_products->where('priority', '4');
        
        //dd($amount);
        dd($list_order_products);
        foreach ($order_products as $order_product)
        {

        }
    }
}
