#!/usr/bin/env bash
composer install --no-interaction --prefer-dist --optimize-autoloader

if [ -f artisan ]
then
    php artisan migrate --force
fi

yarn install
yarn run production

echo Done. Remember to reload the php7.2-fpm service as sudo.
