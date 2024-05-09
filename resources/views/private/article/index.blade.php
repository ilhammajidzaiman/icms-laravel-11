<x-app-layout>

    <x-slot name="header">
        {{ __('article') }}
    </x-slot>
    <x-slot name="button">
        <a href="" class="btn btn-primary">
            {{ __('Baru') }}
        </a>
    </x-slot>

    <x-card>
        <x-card.body>
            <h5 class="card-title">Hai {{ Auth::user()->name ?? 'User' }}.</h5>
            <p class="card-text">
                Selamat datang di aplikasi {{ env('APP_NAME') }}.
            </p>
        </x-card.body>
    </x-card>
</x-app-layout>
