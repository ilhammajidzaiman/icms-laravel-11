<x-app-layout>
    <x-slot name="breadcrumb">
        <x-breadcrumb>
            <x-breadcrumb.item :href="route('dashboard')" :value="__('Dashboard')" />
            <x-breadcrumb.item :href="route('user.index')" :value="__('User')" />
        </x-breadcrumb>
    </x-slot>

    <x-slot name="title">
        {{ __('User') }}
    </x-slot>

    <x-slot name="button">
        <x-link :href="route('user.create')" :value="__('Baru')" class="btn btn-primary" />
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
