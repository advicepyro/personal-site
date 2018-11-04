#!/usr/bin/env bash
git fetch origin master
git reset --hard FETCH_HEAD
git clean -df
git pull

composer install --no-interaction --prefer-dist --optimize-autoloader

if [ -f artisan ]
then
    php artisan migrate --force
fi

yarn install
yarn run production

echo Done. Remember to reload the php7.2-fpm service as sudo.
