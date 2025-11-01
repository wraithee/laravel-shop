[![Laravel](https://github.com/wraithee/laravel-shop/actions/workflows/workflow.yml/badge.svg)](https://github.com/wraithee/laravel-shop/actions/workflows/workflow.yml)
# Laravel Shop Admin Panel

Простая админка для интернет-магазина на Laravel, написанная в качестве учебного пет-проекта при изучении PHP

## Возможности:
- Просмотр списка товаров
- Добавление, редактирование и удаление товаров
- Категории и цены
- Blade-разметка с использованием Tailwind
- Стандартная аутентификация Laravel Breeze (регистрация, авторизация и т.д.)
- Валидация форм с помощью @csrf + middleware для доступа к админке только для пользователей-админов
- Eloquent отношения
- Загрузка изображений

## Стек:
- PHP 8.3.6
- Laravel Framework 12.35.0
- MySQL
- Tailwind
- Laravel Valet
- Laravel Breeze
- Laravel Blade

## Установка:
1. Для начала создайте базу данных в вашем MySQL
```mysql
CREATE DATABASE shop;
```
2. Повторите эти команды в терминале
```bash
## Загрузите проект с данного репозитория
git clone https://github.com/wraithee/laravel-shop
cd laravel-shop

## Установите необходимые зависимости
composer install

## Скопируйте файл с необходимым окружением для проекта и настройте под вашу систему
cp .env.example .env

## Создайте ключ шифрования для приложения
php artisan key:generate

## Запустите свежую миграцию с вашей базой данных
php artisan migrate:fresh

## Создайте ссылку для доступа к загруженным изображениям (storage/app/public)
php artisan storage:link

## Установите необходимые зависимости Node для рендера шаблонов Blade и запустите сервер-сборщик
npm install && npm run dev

## запуск встроенного сервера
php artisan serve
```

3. Админка расположена по пути localhost/products (для начала работы требует авторизации/регистрации)

4. Чтобы дать пользователю права доступа к админке, любым удобным для вас способом смените в таблице users значение  в колонке is_admin на 1 (true)

(так же можно использовать laravel valet вместо ```php artisan serve```, если вы "припарковали" директорию с проектом командой ```valet park```, проект будет доступен по локальной ссылке НАЗВАНИЕ_ДИРЕКТОРИИ.test/products)

## Тесты:
```bash
php artisan test
```

## TODO:
- [] Изменение изображений в уже созданных товарах
- [] Переезд проекта на докер контейнер
- [] Страница со списком товаров для пользователей

## Лицензия:
Проект распространяется под лицензией MIT
