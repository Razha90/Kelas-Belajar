<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/font-poetsen.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-teacher.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>{{ __('index.welcome') }}</h1>
    <div>
        <div>
            {{ __('index.class') }}
        </div>
        <div>
            <p class="font-poetsen text-sm italic">POETSEN</p>
            <p class="font-teachers italic">TEACHER</p>
        </div>
    </div>
</body>
</html>