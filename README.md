<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Clone the project and install dependencies
- git clone git@github.com:astabile/course_subscription_platform.git
- cd course_subscription_platform
- npm install
- npm run dev

## Create and populate schema
- mysql -uroot -p
- create database laravel

- cp .env.example .env

- php artisan key: generate
- php artisan migrate
- php artisan db:seed

If you prefeer to use a MySQL client instead, just import /app/database/laravel.sql

## Run the project locally
- php artisan serve

## Run unit test example (optional)
- vendor/bin/phpunit
