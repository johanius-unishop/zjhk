import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',      // Основной файл стилей
                'resources/css/appAdmin.css', // Новый файл стилей
                'resources/js/app.js',        // Файл JS
            ],
            refresh: true,
        }),
    ],
});


