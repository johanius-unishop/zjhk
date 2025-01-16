#!/bin/bash
set -euo pipefail

# Путь к PHP
PHP_PATH="/usr/bin/php"

# Проверки
command -v git >/dev/null 2>&1 || { echo >&2 "Git not found. Aborting..."; exit 1; }
command -v composer >/dev/null 2>&1 || { echo >&2 "Composer not found. Aborting..."; exit 1; }
command -v npm >/dev/null 2>&1 || { echo >&2 "NPM not found. Aborting..."; exit 1; }

# Логирование
exec > >(tee -a deploy.log) 2> >(tee -a deploy.errlog >&2)

echo "Deployment started ..."

# Настройка прав доступа
sudo find /var/www/html/kevtek/storage -type f -exec chmod 777 {} +
sudo find /var/www/html/kevtek/storage -type d -exec chmod 755 {} +
sudo chown -R johanius:www-data /var/www/html/kevtek/storage

# Войти в режим обслуживания или вернуть true
# если уже в режиме обслуживания
($PHP_PATH artisan down) || true

# Загрузить последнюю версию приложения
git pull origin main

# Удаление старых файлов кеша
rm -rf ./storage/framework/cache/*
rm -rf ./bootstrap/cache/*

# Установить зависимости Composer
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Очистить старый кэш
$PHP_PATH artisan clear-compiled

# Пересоздать кэш
$PHP_PATH artisan optimize

# Скомпилировать ресурсы
npm run build

# Выполнить миграцию базы данных
$PHP_PATH artisan migrate --force

# Генерация ключа приложения
$PHP_PATH artisan key:generate

# Команда op:c
$PHP_PATH artisan op:c

# Перезагрузка очереди
if pgrep -f "artisan queue:work" > /dev/null; then
    $PHP_PATH artisan queue:restart
else
    echo "Queue not running, skipping restart..."
fi

# Выход из режима обслуживания
$PHP_PATH artisan up

# Установка прав доступа после завершения деплоя
sudo chown -R www-data:www-data /var/www/html/kevtek/storage

echo "Deployment finished!"