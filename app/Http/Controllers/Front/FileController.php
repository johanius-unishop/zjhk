<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use ZipArchive;

class FileController extends Controller
{
    /**
     * Скачивание всех файлов в ZIP-архиве.
     *
     * @param Request $request
     * @param mixed $product
     * @return void
     */
    public function downloadAll(Request $request, $product)
    {
        // Получаем объект продукта
        $product = Product::findOrFail($product);

        // Получаем файлы продукта
        $files = $product->getFiles();

        // Если нет файлов, выводим сообщение
        if (empty($files)) {
            abort(404, 'Файлы не найдены.');
        }

        // Имя временного ZIP-архива
        $zipFileName = storage_path( $product->name . '.zip');

        // Создаем ZIP-архив
        $zip = new ZipArchive();
        $zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE);

        // Добавляем файлы в архив
        foreach ($files as $file)
        {
            // Получаем полное имя файла
            $filePath = $file['path'];

            // Добавляем файл в архив
            $zip->addFile($filePath, basename($filePath));
        }

        // Закрываем архив
        $zip->close();

        // Заголовки для отправки архива
        header('Content-Type: application/zip');
        header('Content-disposition: attachment; filename=product_files.zip');
        header('Content-Length: ' . filesize($zipFileName));

        // Отправляем архив пользователю
        readfile($zipFileName);

        // Удаляем временный файл
        unlink($zipFileName);

        exit;
    }
}
