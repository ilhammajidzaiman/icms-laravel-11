<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('image/laravel.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/bootstrap/icons/font/bootstrap-icons.css') }}">
</head>

<body>

    {{-- navbar section --}}
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm bg-white text-dark bg-opacity-75 fw-medium"
        aria-label="Offcanvas navbar large">
        <div class="container py-2">
            <a class="navbar-brand fw-bold fs-3 text-success-emphasis" href="/">
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
                            <a href="/dashboard" aria-current="page" class="nav-link active">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                class="nav-link dropdown-toggle">
                                Parent Menu
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/">Action</a></li>
                                <li><a class="dropdown-item" href="/">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex justify-content-end text-capitalize">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ Auth::user()->name ?? 'User' }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/">Profil</a></li>
                                <li><a class="dropdown-item" href="/">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{-- container section --}}
    <section class="container mt-5 py-5">
        <h1>Dashboard</h1>
    </section>


    <script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
