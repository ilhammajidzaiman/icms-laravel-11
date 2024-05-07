<x-app-layout>
    <x-slot name="title">
        {{ __('tag') }}
    </x-slot>
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">
            {{ __('Mulai') }}
        </button>
    </x-slot>

    <x-card>
        <x-card.body>
            <h5 class="card-title">Hai {{ Auth::user()->name ?? 'User' }}.</h5>
        </x-card.body>
    </x-card>
</x-app-layout>
