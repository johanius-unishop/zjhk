<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\AdditionalSetting;
use App\Models\Vendor;
use App\Models\Currency;
use App\Models\Order;
use Carbon\Carbon;
// use App\Models\Product;
// use App\Models\Consulting;
// use App\Models\Vendor;
// use App\Models\PriceRequest;
// use App\Models\ProductType;
// use App\Models\Opinion;
// use App\Models\Order;
// use App\Models\Drawing;
// use App\Models\Subscribe;
// use App\Models\ModelRequest;

// use App\Http\Requests\Admin\ImportProductFileRequest;

use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Jobs\AttachFilesToProduct;
use App\Jobs\AttachImagesToProduct;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\File;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use Illuminate\Support\Facades\Session;
use Exception;
class ImportController extends Controller
{


    public function index()
    {
        return view('admin.import.index');
    }

    public function import_price_from_xls(Request $request)
    {
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
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            $spreadsheet = $reader->load($path);
        } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
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
    
}
