<x-app-layout>
    <x-slot name="title">
        {{ __('User') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('user.create') }}" class="btn btn-primary">
            {{ __('Baru') }}
        </a>
    </x-slot>

    <x-card>
        <x-card.body>
            <h5 class="card-title">Hai {{ Auth::user()->name ?? 'User' }}.</h5>
            <p class="card-text">
                Daftar User
            </p>
        </x-card.body>
    </x-card>
</x-app-layout>
