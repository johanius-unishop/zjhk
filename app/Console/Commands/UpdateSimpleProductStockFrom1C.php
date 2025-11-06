<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Setting;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\DB;

class UpdateSimpleProductStockFrom1C extends Command
{
    /**
     * Имя и сигнатура консольной команды.
     *
     * @var string
     */
    protected $signature = 'products:update-simple-products-stock-from-1c';

    /**
     * Описание консольной команды.
     *
     * @var string
     */
    protected $description = 'Обновление остатков товаров из файла Excel';

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
    protected $lastSuccessfulUpdateTime = 0;

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
        $this->lastSuccessfulUpdateTime = $this->loadLastSuccessfulUpdateTime();
        $this->reportFilePath = $this->loadReportFilePath();//base_path('storage/app/protected/Ostatki tovarov.xlsx');

        if (!is_null($this->reportFilePath)) {
            // Получаем время изменения файла
            $fileModificationTime = filemtime($this->reportFilePath);

            // Проверяем, был ли файл изменен после последнего успешного обновления
            if ($fileModificationTime > $this->lastSuccessfulUpdateTime) {
                $this->info('Файл отчета изменен. Обновляем остатки товаров...');

                try {

                    // Получаем простые товары
                    $products = Product::where('composite_product', 0)->get();

                    // Создаем ассоциативный массив для быстрого поиска по имени и артикулу
                    $products_new_stock = [];
                    foreach ($products as $product) {
                        $key = $product->name . '-' . $product->article;
                        $products_new_stock[$key] = [
                            'id' => $product->id,
                            'stock' => intval($product->stock),
                            'new_stock' => 0,
                        ];
                    }

                    $file = $this->reportFilePath;
                    // Загружаем файл
                    $reader = IOFactory::createReaderForFile($file);
                    $spreadsheet = $reader->load($file);

                    // Получаем активный лист
                    $worksheet = $spreadsheet->getActiveSheet();

                    // Начинаем обработку с 8-й строки
                    for ($i = 8; $i <= $worksheet->getHighestDataRow(); ++$i) {
                        // Получаем данные из ячейки
                        $name = $worksheet->getCell([1, $i])->getValue();
                        $article = $worksheet->getCell([3, $i])->getValue();
                        $quantity = $worksheet->getCell([4, $i])->getValue();

                        $key = $name . '-' . $article;
                        if (isset($products_new_stock[$key])) {
                            $products_new_stock[$key]['new_stock'] = intval($quantity);
                        }
                    }

                    // Подготавливаем массив для массового обновления
                    $updates = [];
                    foreach ($products_new_stock as $product_new_stock) {
                        if ($product_new_stock['stock'] != $product_new_stock['new_stock']) {
                            $updates[] = [
                                'id' => intval($product_new_stock['id']),
                                'stock' => intval($product_new_stock['new_stock'])
                            ];
                        }
                    }

                    if (!empty($updates)) {
                        foreach ($updates as $update) {
                            Product::updateOrCreate(
                                ['id' => $update['id']], // Условие поиска по полю 'id'
                                ['stock' => $update['stock']] // Данные для обновления
                            );
                        }
                    }


                    $this->saveLastSuccessfulUpdateTime();
                    dd($this->saveLastSuccessfulUpdateTime());
                    if (!empty($updates)) {
                        $this->call('products:update-composite-products-stock');
                        $this->call('yandex:update-product-search');
                        $this->call('ozon:update-stock');
                        $this->call('yandexMarket:update-sales-terms');
                    }
                    return 0;

                } catch (\Exception $e) {
                    $this->error('Произошла ошибка при обновлении остатков: ' . $e->getMessage());
                    return 1;
                }
            } else {
                $this->info('Файл отчета не изменился с момента последнего обновления. Обновление не требуется.');
            }

            return 0;
        } else {
            $this->error('Файл отчета с остатками не найден!');
        }
    }

    /**
     * Загружает время последнего успешного обновления из БД.
     *
     * @return int Время в секундах с начала эпохи Unix.
     */
    protected function loadLastSuccessfulUpdateTime(): int
    {
        // Получаем запись из базы данных
        $setting = Setting::where('group', 'stockLoader')
            ->where('key', 'lastSuccesfulUpdateTime')
            ->first();

        if ($setting === null) {
            // Если записи нет, создаем новую с значением 0
            $newSetting = new Setting();
            $newSetting->group = 'stockLoader';
            $newSetting->key = 'lastSuccesfulUpdateTime';
            $newSetting->value = 0;

            // Сохраняем новую запись
            $newSetting->save();

            return 0;
        }

        // Преобразуем значение в целое число и возвращаем
        return (int)$setting->value;
    }

     /**
     * Загружает имя файла отчета из БД и задает путь к нему.
     *
     * @return int Время в секундах с начала эпохи Unix.
     */
    protected function loadReportFilePath(): ?string
    {
        // Получаем запись из базы данных
        $setting = Setting::where('group', 'stockLoader')
            ->where('key', 'stockFileName')
            ->first();

        if (!$setting) {
            // Если записи нет, создаем новую с значением по умолчанию
            $defaultValue = 'Ostatki tovarov.xlsx';
            $newSetting = Setting::create([
                'group' => 'stockLoader',
                'key' => 'stockFileName',
                'value' => $defaultValue,
            ]);

            $pathToFile = public_path("uploads/$defaultValue");
            if (!file_exists($pathToFile)) {
                return null;
            }

            return $pathToFile;
        }

        $pathToFile = public_path("uploads/{$setting->value}");
        if (!file_exists($pathToFile)) {
            return null;
        }

        return $pathToFile;
    }


    /**
     * Сохраняет время последнего успешного обновления в БД.
     *
     * @return void
     */
    protected function saveLastSuccessfulUpdateTime(): void
    {
        $setting = Setting::where('group', 'stockLoader')
            ->where('key', 'lastSuccesfulUpdateTime')
            ->first();

        $setting->value = now()->timestamp; // Используем текущее время
        $setting->save(); // Сохраняем изменения в существующей записи
    }
}
