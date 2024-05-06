<x-app-layout>
    <x-slot name="title">
        {{ __('article') }}
    </x-slot>
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">
            {{ __('Mulai') }}
        </button>
    </x-slot>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Hai {{ Auth::user()->name ?? 'User' }}.</h5>
            <p class="card-text">
                Selamat datang di aplikasi {{ env('APP_NAME') }}.
            </p>
        </div>
    </div>
</x-app-layout>
