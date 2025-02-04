<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\AdditionalSetting;
use App\Models\Vendor;
use App\Models\Currency;


use App\Models\ProductType;
use App\Models\ProductTypeProperty;

use App\Models\Product;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\DataValidation;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Collection;
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
        $relevantData = array_slice($dataRows, $startRow); // Пропускаем первые две строки

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
                    'name' => trim($vendor)
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
                        'composite_product' => 0
                    ]
                    );
                }
            }
        return back()->with('success', 'Прайс-лист успешно загружен.');
    }
    
    public function export_products_properties_values_to_xls(Request $request)
    {
        $productType = ProductType::where('id', $request->productType)->first();
        $properties = ProductTypeProperty::where('product_type_id', $productType->id)->orderBy('order_column')->with('productTypePropertyValues')->get();
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
        
        $sheet->setCellValue('A1', $productType->name);
        $columnIndex = 4;
        $rowIndex = 2;
        $variants = [];
        $variants_value = [];
        $product_values = [];

        foreach ($properties as $property) {
                $variants[$columnIndex] = $property->productTypePropertyValues->pluck('value')->toArray(); 
                $variants_value[$property->id] =  $property->productTypePropertyValues->pluck('value', 'id')->toArray(); 
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
            $sheet->setCellValue($cellCoordinate, $product->vendor->short_name ?? '');
            $columnIndex = 2;
            $columnLetter = columnNumberToLetter($columnIndex); // Преобразование индекса колонки в букву (A, B, C...)
            $cellCoordinate = $columnLetter . ($rowIndex); // Формирование координат ячейки (A1, B1, ...)
            $sheet->setCellValue($cellCoordinate, $product->name);
            $columnIndex = 3;
            $columnLetter = columnNumberToLetter($columnIndex); // Преобразование индекса колонки в букву (A, B, C...)
            $cellCoordinate = $columnLetter . ($rowIndex); // Формирование координат ячейки (A1, B1, ...)
            $sheet->setCellValue($cellCoordinate, $product->article);
            
            $rowIndex ++;
        }

        $startRowIndex = 3;
        $endRowIndex = $rowIndex-1;

        $sheet->mergeCells('A1:E1');

        $columnIndex = 4;

        foreach ($properties as $property) {
            if (!empty($variants[$columnIndex])) {
                $columnLetter = columnNumberToLetter($columnIndex);
                $cellRange = $columnLetter . $startRowIndex . ':' . $columnLetter . $endRowIndex;
                
                // Создаем выпадающий список
                $validation = $sheet->getDataValidation($cellRange)
                                        ->setType(DataValidation::TYPE_LIST)
                                        ->setErrorStyle(DataValidation::STYLE_INFORMATION)
                                        ->setAllowBlank(false)
                                        ->setShowInputMessage(true)
                                        ->setShowErrorMessage(true)
                                        ->setShowDropDown(true)
                                        ->setFormula1('"' . implode(',', $variants[$columnIndex]) . '"');
            }
            $columnIndex++;
        }

        
        $rowIndex = 3;
        $columnIndex = 4;

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
            $columnIndex = 4; // Сбрасываем индекс колонки для новой строки
        }


        // Определяем последний заполненный столбец
        $highestColumn = $sheet->getHighestColumn();

        $lastColumn = $sheet->getHighestColumn();
        $lastColumnIndex = Coordinate::columnIndexFromString($lastColumn);

        // Настраиваем ширину столбцов от A до последнего заполненного столбца

        // Определяем первую букву столбца
        $firstLetter = 'A';
        if ($lastColumnIndex > 26) { // Если максимальный столбец больше Z
            $firstLetter = Coordinate::StringFromColumnIndex(floor(($lastColumnIndex - 1) / 26));
        }

        // Настраиваем ширину столбцов от A до последнего заполненного столбца
        foreach (range($firstLetter, 'Z') as $firstChar) {
            foreach (range('A', 'Z') as $secondChar) {
                $columnID = $firstChar . $secondChar;
                if (Coordinate::columnIndexFromString($columnID) <= $lastColumnIndex) {
                    $sheet->getColumnDimension($columnID)->setAutoSize(true);
                }
            }
        }

        // Закрепление первых трех столбцов и двух строк
        $sheet->freezePane('D3'); // Указываем ячейку, начиная с которой область будет прокручиваться
        

        // Сохраняем файл в память
        $writer = new Xlsx($spreadsheet);
        ob_start();
        $writer->save('php://output');
        $content = ob_get_clean();

        // Имя файла
        $filename = rawurlencode($productType->name) . '.xlsx';

        // Отправляем файл клиенту для скачивания
        return response($content, 200)
            ->header('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
            ->header("Content-Disposition", "attachment; filename*=UTF-8''$filename");
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
        
        $productTypePropertyXls = [];
        $productXls = [];
        
        
        try {
            // Загружаем файл
            $spreadsheet = IOFactory::load($path);
        } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
        
        // Получаем первый лист
        $worksheet = $spreadsheet->getActiveSheet();
        // Определяем последнюю строку и последний столбец
        $lastRow = $worksheet->getHighestRow();
        $lastColumn = $worksheet->getHighestColumn();
        $lastColumnIndex = Coordinate::columnIndexFromString($lastColumn);
        
        $productType = ProductType::where('name', trim($worksheet->getCell('A1')->getValue()))->first();
        
        if ($productType) {
            
            
            $range = 'A2:' . $lastColumn . $lastRow;

            
            $dataArray = [];
            // Преобразование диапазона ячеек в массив
            $dataArray = $worksheet->rangeToArray($range, null, true, false, true);
            dd($dataArray);


            echo "Найден продукт с именем: " . $productType->name;
        } else {
            echo "Продукт с таким именем не найден.";
        }
    }
}
