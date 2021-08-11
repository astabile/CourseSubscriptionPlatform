<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Clone the project
- git clone git@github.com:astabile/course_subscription_platform.git
- cd course_subscription_platform

## Install dependencies
- npm install
- npm run dev

- composer install
- composer update

## Create schema
### If you are using a MySQL client
- create the laravel database and import /app/database/laravel.sql

### If you are not using a MySQL client
- nano .bash_profile
- export PATH=${PATH}:/usr/local/mysql/bin

- mysql -uroot -p
- create database laravel

## Configure credentials and populate the schema
- cp .env.example .env

- php artisan key: generate
- php artisan migrate
- php artisan db:seed

## Run the project locally
- php artisan serve

## Run unit test example (optional)
- vendor/bin/phpunit