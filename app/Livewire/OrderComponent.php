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
        $orderDateCell = $settings['orderDateCell'];
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

        $orderNumber = trim($worksheet->getCell($orderNameCell)->getValue());
        $orderDate = trim($worksheet->getCell($orderDateCell)->getValue());
        
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
                $order->order_date = $orderDate; // Текущая дата в формате дд.мм.гггг
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
