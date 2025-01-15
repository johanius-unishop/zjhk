<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Order;
use App\Models\OrderComposition;
use App\Models\Product;
use App\Models\AdditionalSetting;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Carbon\Carbon;

class OrderComponent extends Component
{
    use LivewireAlert;
    use WithFileUploads; // Подключаем поддержку загрузки файлов

    public $xls_file;
    public $order_error_message;

    public function render()
    {
        return view('livewire.order-component', [
            'order_error_message' => $this->order_error_message ?? null
        ]);
    }

    /**
     * Метод для сохранения файла
     */
    public function save()
    {   
        // Проверка, что файл был загружен
        if (!$this->xls_file) {
            session()->flash('error', 'Пожалуйста, выберите файл.');
            return redirect()->back();
        }

        $settings = AdditionalSetting::where('group', 'orderImport')
                             ->pluck('value', 'name')
                             ->all();
        $orderNameCell = $settings['orderNameCell'];
        $startRow = intval($settings['startRowData']); // Преобразуем значение startRowData в целое число
        $modelCol = $settings['modelColumn'];
        $quantityCol = $settings['quantityColumn'];
        
        // Получаем временный путь к загруженному файлу
        $path = $this->xls_file->getRealPath();
        // Создаем объект для чтения файла
        $reader = IOFactory::createReaderForFile($path);
        // Загружаем данные из файла
        $spreadsheet = $reader->load($path); 
        // Получаем первый лист
        $worksheet = $spreadsheet->getActiveSheet();

        $orderNumber = preg_replace('/[^0-9]/', '', $worksheet->getCell($orderNameCell)->getValue());
        
                if (!Order::where('order_number', $orderNumber)->first()) {
                    $row = $startRow;
                    $missingProducts = []; // Массив для хранения недостающих товаров

                    // Проверяем все товары перед загрузкой
                    while ($worksheet->getCell($modelCol . $row)->getValue() !== null) {
                        $productModel = $worksheet->getCell($modelCol . $row)->getValue();
                        $product = Product::where('name', $productModel)->first();

                        if (!$product) {
                            $missingProducts[] = $productModel;
                        }

                        $row++;
                    }
                }
                
                if (!empty($missingProducts)) {

                    session()->flash('order_error_message', 'В файле заказа есть товары, которых нет в БД:');
                    session()->flash('missingProducts', $missingProducts);
                
                    return redirect()->back();
                }
                $order = new Order();
                $order->order_number = $orderNumber;
                $order->order_date = Carbon::now()->format('d.m.Y'); // Текущая дата в формате дд.мм.гггг
                $order->received = 0;
                
                $order->save();
               
                $order_id = $order->id; // Здесь хранится ID только что добавленной записи
                

                $row = $startRow;
                    while ($worksheet->getCell($modelCol . $row)->getValue() !== null) {
                        $productModel = $worksheet->getCell($modelCol . $row)->getValue();
                        $quantity = $worksheet->getCell($quantityCol . $row)->getValue();

                        $product = Product::where('name', $productModel)->first();

                        $orderComposition = new OrderComposition();
                        $orderComposition->quantity = $quantity;
                        $orderComposition->order_id = $order_id;
                        $orderComposition->product_id = $product->id;
                        $orderComposition->save();

                        $row++;
                    }
                $this->reset('xls_file');
                $this->dispatch('update-order-table');       
                return;    
    }
}
 /*   
        $orderName = $worksheet->getCell('A1')->getValue();
        $orderNumber = preg_replace('/[^0-9]/', '', $orderName);
        
        $order = new Order();
        $order->order_number = $orderNumber;
        $order->order_date = Carbon::now()->format('d.m.Y'); // Текущая дата в формате дд.мм.гггг
        $order->received = 0;
        $order->save();

        $order_id = $order->id; // Здесь хранится ID только что добавленной записи
*/
   /*     $models = array_column($relevantData, 'A');
        // Фильтруем массив, чтобы исключить значения null
        $filteredModels = array_filter($models, function($value) {
            return !is_null($value);
        });
        // Оставляем только уникальные значения
        $uniqueModels = array_unique($filteredModels);
        // Выполняем запрос к базе данных
        $existingProducts = Product::whereIn('name', $uniqueModels)->get();
        // Формируем список существующих моделей
        $existingModels = $existingProducts->pluck('name')->toArray();
        // Список отсутствующих моделей
        $missingModels = array_diff($uniqueModels, $existingModels);
        $filteredMissingModels = array_filter($missingModels, function($value) {
            return !empty($value);
        });

        if (!empty($filteredMissingModels)) {
            // Формируем сообщение с перечислением отсутствующих товаров
            $missingProductsList = implode(', ', $filteredMissingModels);
            
            $errorMessage = "При импорте заказа обнаружены отсутствующие в БД товары: {$missingProductsList}.";
            
            // Сохраняем сообщение об ошибках в сессии
            Session::flash('filteredMissingModels', $errorMessage);
            
            // Перенаправляем пользователя обратно с сохранёнными входными данными
            return back();
        }
        
        
        return redirect()->route('admin.order.error', ['errorMessage' => 'Не удалось обработать заказ. Попробуйте позже.']);
        
        foreach ($relevantData as $row) {
            if (!empty($row[$modelCol])) {
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
    
}*/
