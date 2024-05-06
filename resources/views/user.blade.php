<x-app-layout>
    <x-slot name="title">
        {{ __('User') }}
    </x-slot>
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">
            {{ __('Baru') }}
        </button>
    </x-slot>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h5 class="card-title">List</h5>
            <p class="card-text">
                Halaman User.
            </p>
        </div>
    </div>
</x-app-layout>
