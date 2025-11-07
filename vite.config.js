import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',      // Основной файл стилей
                'resources/css/appAdmin.css', // Файл стилей админки
                'resources/js/app.js',        // Файл JS
                'resources/js/appAdmin.js', // Файл JS админки
            ],
            refresh: true,
        }),
    ],
});


