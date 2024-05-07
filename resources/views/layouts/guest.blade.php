<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @isset($title)
            {{ $title . ' | ' . env('APP_NAME') }}
        @else
            {{ env('APP_NAME') }}
        @endisset
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('image/laravel.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/bootstrap/icons/font/bootstrap-icons.css') }}">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-light">

    {{ $slot }}

    <footer class="container py-5">
        <div class="text-center">
            <small class="text-secondary">
                {{ env('APP_NAME') }}
                &copy;
                {{ date('Y') }}
            </small>
        </div>
    </footer>

    <script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
