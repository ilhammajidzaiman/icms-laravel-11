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
    <section class="container mt-5 py-5">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="text-center mb-5">
                    <img src="{{ asset('image/laravel.svg') }}" alt="logo" width="70">
                </div>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <x-form.input-label for="email" :value="__('Email / Username')" />
                                <x-form.text-input type="text" name="email" id="email" :value="old('email')" />
                                <x-form.input-error :messages="$errors->get('email')" />
                            </div>

                            <div class="mb-3">
                                <x-form.input-label for="password" :value="__('Password')" />
                                <x-form.text-input type="password" name="password" id="password" />
                                <x-form.input-error :messages="$errors->get('password')" />
                            </div>

                            {{-- <div class="mb-3">
                                <label for="email" class="form-label">Email / Username</label>
                                <input type="text" name="email" id="email" class="form-control">
                                <div class="invalid-feedback">
                                    Please enter a message in the textarea.
                                </div>
                            </div> --}}
                            {{-- <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div> --}}
                            <div class="form-check mb-3">
                                <input type="checkbox" name="remember" id="remember_me" class="form-check-input">
                                <label for="remember_me" class="form-check-label">
                                    {{ __('Ingat saya') }}
                                </label>
                            </div>
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Log in') }}
                                </button>
                            </div>
                            <div class="float-end">
                                <a href="" class="">
                                    {{ __('Lupa kata sandi anda?') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
