# Laravel Shop Admin Panel

Простая админка для интернет-магазина на Laravel, написанная в качестве учебного пет-проекта при изучении PHP

## Возможности:
- Просмотр списка товаров
- Добавление, редактирование и удаление товаров
- Категории и цены
- Blade-разметка с использованием Tailwind

## Стек:
- PHP 8.3.6
- Laravel Framework 12.35.0
- MySQL
- Tailwind
- Laravel Valet

## Установка:
1. Для начала создайте базу данных в вашем MySQL
```mysql
CREATE DATABASE shop;
```
2. Повторите эти команды в терминале
```bash
git clone https://github.com/wraithee/laravel-shop
cd laravel-shop
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh
npm install && npm run dev
php artisan serve
```
3. Админка расположена по пути localhost/products

(так же можно использовать laravel valet вместо ```php artisan serve```, если вы "припарковали" директорию с проектом командой ```valet park```, проект будет доступен по локальной ссылке НАЗВАНИЕ_ДИРЕКТОРИИ.test/products)

## Тесты:
```bash
php artisan test
```

## Лицензия:
Проект распространяется под лицензией MIT
