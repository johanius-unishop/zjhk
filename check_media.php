<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

// Получаем список всех медиа элементов
$medias = DB::table('media')->get();

foreach ($medias as $media) {
    // Полный путь к файлу на сервере
    $filePath = storage_path('app/' . $media->disk . '/' . $media->file_name);

    // Если файл не существует, удаляем запись из базы данных
    if (!File::exists($filePath)) {
        echo 'Файл не найден: ' . $filePath . ', удаление записи...' . "\n";

        // Убираем запись из базы данных
        DB::table('media')
            ->where('id', $media->id)
            ->delete();
    }
}
