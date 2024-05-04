<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>
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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm bg-white text-dark bg-opacity-75"
        aria-label="Offcanvas navbar large">
        <div class="container py-1">
            <a class="navbar-brand text-success-emphasis" href="/">
                <img src="{{ asset('image/laravel.svg') }}" alt="Logo" width="35" height="35"
                    class="d-inline-block align-text-top">
                <span class="d-inline d-lg-none">
                    {{ env('APP_NAME') }}
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
                aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-light bg-opacity-100" tabindex="-1" id="offcanvasNavbar2"
                aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label">
                        {{ env('APP_NAME') }}
                    </h5>
                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1 me-auto text-capitalize">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                {{ __('Dashboard') }}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                class="nav-link dropdown-toggle">
                                Menu
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="/">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex justify-content-end text-capitalize">
                        <li class="nav-item dropdown">
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                class="nav-link dropdown-toggle">
                                {{ Auth::user()->name ?? 'User' }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                        Profil
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="dropdown-item">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{-- container section --}}
    <section class="container mt-5 py-5">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/template">
                        Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    Wellcome
                </li>
            </ol>
        </nav>
        <header class="row mb-3">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <div class="float-sm-end">
                    <button type="submit" class="btn btn-primary">Mulai</button>
                </div>
            </div>
        </header>
        <main>
            <div class="card
                border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Hai {{ Auth::user()->name ?? 'User' }}.</h5>
                    <p class="card-text">
                        Selamat datang di aplikasi {{ env('APP_NAME') }}.
                    </p>
                </div>
        </main>
    </section>
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
