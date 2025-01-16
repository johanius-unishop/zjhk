#!/bin/bash
set -e

echo "Deployment started ..."

sudo find /var/www/html/kevtek/storage -type f -exec chmod 777 {} +
sudo find /var/www/html/kevtek/storage -type d -exec chmod 755 {} +
sudo chown -R johanius:www-data /var/www/html/kevtek/storage

# Войти в режим обслуживания или вернуть true
# если уже в режиме обслуживания
(php artisan down) || true

# Загрузить последнюю версию приложения
git pull origin main

# Установить зависимости Composer
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Очистить старый кэш
php artisan clear-compiled

# Пересоздать кэш
php artisan optimize

# Скомпилировать ресурсы
npm run build

php -v
/usr/local/bin/composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader
php artisan migrate --force
php artisan key:generate
php artisan op:c

php artisan up
php artisan queue:restart

sudo chown -R www-data:www-data /var/www/html/kevtek/storage


# Запустить миграцию базы данных
#php artisan migrate --force

# Выход из режима обслуживания
php artisan up

echo "Deployment finished!"
