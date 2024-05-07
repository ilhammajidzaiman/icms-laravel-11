<x-app-layout>
    <x-slot name="breadcrumb">
        <x-breadcrumb>
            <x-breadcrumb.item :href="route('dashboard')" :value="__('Dashboard')" />
            <x-breadcrumb.item :href="route('user.index')" :value="__('User')" />
            <x-breadcrumb.item :href="route('user.show', ['user' => 'slug'])" :value="__('Lihat')" />
        </x-breadcrumb>
    </x-slot>

    <x-slot name="title">
        {{ __('Lihat User') }}
    </x-slot>

    <x-slot name="button">
        <x-link :href="route('user.edit', ['user' => 'slug'])" :value="__('Ubah')" icon="bi bi-pencil" class="btn btn-success" />
    </x-slot>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Hai {{ Auth::user()->name ?? 'User' }}.</h5>
            <p class="card-text">
                Show User
            </p>
        </div>
    </div>
</x-app-layout>
