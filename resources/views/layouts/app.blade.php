<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой магазин</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="p-6 bg-gray-100">
<div class="container mx-auto">
    @yield('content')
</div>
</body>
</html>
