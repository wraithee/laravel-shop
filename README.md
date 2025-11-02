[![Laravel](https://github.com/wraithee/laravel-shop/actions/workflows/workflow.yml/badge.svg)](https://github.com/wraithee/laravel-shop/actions/workflows/workflow.yml)
[![PHP](https://img.shields.io/badge/lang-PHP-blue)](https://www.php.net/)
[![Server](https://img.shields.io/badge/server-NGINX-blue)](https://nginx.org/)
[![DB](https://img.shields.io/badge/DB-MySQL-blue)](https://www.mysql.com/)
![framework](https://raw.githubusercontent.com/laravel/art/d5f5e725c27f877ed032225fe0b00afee9337d0f/laravel-logo.svg)
# Laravel Shop Admin Panel

Простая админка для интернет-магазина на Laravel, написанная в качестве учебного пет-проекта при изучении PHP

***

## Возможности:
- Просмотр списка товаров
- Добавление, редактирование и удаление товаров
- Категории товаров
- Blade-разметка с использованием Tailwind
- Стандартная аутентификация Laravel Breeze (регистрация, авторизация и т.д.)
- Валидация форм с помощью @csrf + middleware для доступа к админке только для пользователей-админов
- Eloquent отношения
- Загрузка изображений

***

## Стек:
- PHP 8.3.6
- Laravel Framework 12.35.0
- MySQL
- Docker
- Nginx
- phpMyAdmin
- Tailwind
- Laravel Breeze
- Laravel Blade

***

## Установка:
1. Клонировать проект
```bash
git clone https://github.com/wraithee/laravel-shop.git
```
2. Перейти в директорию с проектом
```bash
cd laravel-shop
```
3. Скопируйте файл окружения
```bash
cp .env.example .env
```
4. Запустите докер
```bash
docker compose up -d --build
```
5. Откройте в браузере
    - Страница проекта: http://localhost:8080
    - phpMyAdmin: http://localhost:8081

Докер автоматически установит все нужные зависимости,
сгенерирует ключ приложения для .env файла,
прокинет миграции и запустит сидеры для базы данных и
сам соберет npm для корректного отображения Tailwind + Blade шаблонов.
Так же сидер автоматически создает 3 тестовых товаров + пользователя с доступом к админке

***

## Для входа от пользователя-админа используйте эти данные:
- mail = ```admin@example.com```
- password = ```password```

***

## Структура докер-контейнера:
- php - само laravel приложение
- node - сборщик фронтенд части приложения
- nginx - веб-сервер, работающий в паре с php-fpm, внутренний порт 80, внешний 8080
- mysql - база данных, внутренний порт 3306
- phpmyadmin - приложение для удобного управления базами данных, внутренний порт 80, внешний 8081

***

## TODO:
- [ ] Изменение изображений в уже созданных товарах
- [x] Переезд проекта на докер контейнер
- [ ] Страница со списком товаров для пользователей

***

## Известные проблемы:
- Тесты не запускаются внутри докер-сервиса php, пока что нет идей как это исправить

***

## Лицензия:
Проект распространяется под лицензией MIT
