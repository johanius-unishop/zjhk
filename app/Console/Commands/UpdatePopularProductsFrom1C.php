<?php

namespace App\Console\Commands;

use App\Models\PopularProduct;
use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Setting;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Log;

class UpdatePopularProductsFrom1C extends Command
{
    /**
     * Имя и сигнатура консольной команды.
     *
     * @var string
     */
    protected $signature = 'products:update-popular-products-from-1c';

    /**
     * Описание консольной команды.
     *
     * @var string
     */
    protected $description = 'Обновление популярных товаров';

    /**
     * Путь к файлу отчета.
     *
     * @var string
     */
    protected $reportPopularFilePath;

    /**
     * Время последнего успешного обновления остатков.
     *
     * @var int
     */
    protected $lastPopularSuccessfulUpdateTime = 0;

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
        Log::info("Обновление ПОПУЛЯРНЫЕ ТОВАРЫ запущено.");
        $this->lastPopularSuccessfulUpdateTime = $this->loadLastSuccessfulUpdateTime();
        $this->reportPopularFilePath = $this->loadReportFilePath(); //base_path('storage/app/protected/Ostatki tovarov.xlsx');
        Log::info("Путь к отчету: " . $this->reportPopularFilePath);
        if (!is_null($this->reportPopularFilePath)) {
            // Получаем время изменения файла
            $fileModificationTime = filemtime($this->reportPopularFilePath);

            // Проверяем, был ли файл изменен после последнего успешного обновления
            if ($fileModificationTime > $this->lastPopularSuccessfulUpdateTime) {
                $this->info('Файл отчета изменен. Обновляем популярные товары...');

                try {

                    // Получаем простые товары
                    $products = Product::all();

                    // Создаем ассоциативный массив для быстрого поиска по имени и артикулу
                    $popular_products = [];
                    foreach ($products as $product) {
                        $popular_products[$product->name] = [
                            'id' => $product->id,
                            'pop_quantity' => 0,
                        ];
                    }

                    $file = $this->reportPopularFilePath;
                    // Загружаем файл
                    $reader = IOFactory::createReaderForFile($file);
                    $spreadsheet = $reader->load($file);

                    // Получаем активный лист
                    $worksheet = $spreadsheet->getActiveSheet();

                    // Начинаем обработку с 8-й строки
                    for ($i = 8; $i <= $worksheet->getHighestDataRow(); ++$i) {
                        // Получаем данные из ячейки
                        $name = rtrim($worksheet->getCell([1, $i])->getValue(), ',  шт');
                        $quantity = $worksheet->getCell([2, $i])->getValue();

                        $pattern = '/(CDSM-|CDSF-|CDGM-|CDGF-|CESM-|CESF-|CEGM-|CEGF-)/iu'; // i - case-insensitive, u - unicode

                        if (preg_match($pattern, $name)) {
                            $quantity = $quantity/100;
                        }

                        if (isset($popular_products[$name])) {
                            $popular_products[$name]['pop_quantity'] = intval($quantity);
                        }
                    }


                    uasort($popular_products, function ($a, $b) {
                        return $b['pop_quantity'] <=> $a['pop_quantity'];
                    });

                    $short_popular_products = array_splice($popular_products, 0, 12);


                    // Подготавливаем массив для массового обновления
                    $updates = [];
                    $counter = 1;
                    foreach ($short_popular_products as $popular_product) {
                        $updates[] = [
                            'id' => $counter,
                            'product_id' => $popular_product['id']
                        ];
                        $counter = $counter + 1;
                    }

                    if (!empty($updates)) {
                        foreach ($updates as $update) {
                            PopularProduct::updateOrCreate(
                                ['id' => $update['id']], // Условие поиска по полю 'id'
                                ['product_id' => $update['product_id']] // Данные для обновления
                            );
                        }
                    }


                    $this->saveLastSuccessfulUpdateTime();
                    Log::info("Обновление ПОПУЛЯРНЫЕ ТОВАРЫ прошло Успешно!.");

                    return 0;
                } catch (\Exception $e) {
                    $this->error('Произошла ошибка при обновлении популярных товаров: ' . $e->getMessage());
                    Log::error(
                        "Произошла ошибка при обновлении популярных товаров: {$e->getMessage()} \n" .
                            "Trace: " . $e->getTraceAsString()
                    );
                    return 1;
                }
            } else {
                $this->info('Файл ПОПУЛЯРНЫЕ ТОВАРЫ не изменился с момента последнего обновления. Обновление не требуется.');
                Log::info("Файл ПОПУЛЯРНЫЕ ТОВАРЫ  не изменился с момента последнего обновления. Обновление не требуется.");
            }

            return 0;
        } else {
            $this->error('Файл отчета с популярными товарами не найден!');
            Log::error("Файл отчета с популярными товарами не найден!");
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
        $setting = Setting::where('group', 'popularProducts')
            ->where('key', 'lastSuccesfulUpdateTime')
            ->first();

        if ($setting === null) {
            // Если записи нет, создаем новую с значением 0
            $newSetting = new Setting();
            $newSetting->group = 'popularProducts';
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
        $setting = Setting::where('group', 'popularProducts')
            ->where('key', 'reportFileName')
            ->first();

        if (!$setting) {
            // Если записи нет, создаем новую с значением по умолчанию
            $defaultValue = 'Prodazhi po nomenklature.xlsx';
            $newSetting = Setting::create([
                'group' => 'popularProducts',
                'key' => 'reportFileName',
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
        $setting = Setting::where('group', 'popularProducts')
            ->where('key', 'lastSuccesfulUpdateTime')
            ->first();

        $setting->value = now()->timestamp; // Используем текущее время
        $setting->save(); // Сохраняем изменения в существующей записи
    }
}
