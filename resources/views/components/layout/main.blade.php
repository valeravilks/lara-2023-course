<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 2023 Course</title>
    @vite(['resources/css/app.scss'])
</head>
<body class="d-flex flex-column h-100">
    <x-header />
    <main>
        <div class="container">
            <x-notifications />
            {{ $slot }}
        </div>
    </main>
    @vite(['resources/js/app.js'])
    <x-footer />
</body>
</html>
