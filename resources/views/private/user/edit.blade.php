<x-app-layout>
    <x-slot name="breadcrumb">
        <x-breadcrumb>
            <x-breadcrumb.item :href="route('dashboard')" :value="__('Dashboard')" />
            <x-breadcrumb.item :href="route('user.index')" :value="__('User')" />
            <x-breadcrumb.item :href="route('user.edit', ['user' => 'slug'])" :value="__('Ubah')" />
        </x-breadcrumb>
    </x-slot>

    <x-slot name="header">
        {{ __('Ubah User') }}
    </x-slot>

    <x-slot name="button">
        <x-link :href="route('user.show', ['user' => 'slug'])" :value="__('Lihat')" icon="bi bi-eye" class="btn btn-primary me-2" />
        <x-link :href="route('user.delete', ['user' => 'slug'])" :value="__('Hapus')" icon="bi bi-trash" class="btn btn-danger" />
    </x-slot>

    <x-card>
        <x-card.body>
            <x-form action="{{ route('dashboard') }}" method="post">
                @csrf
                <x-form.input>
                    <x-form.input.label for="name" :value="__('Nama')" />
                    <x-form.input.text type="text" name="name" id="name" :value="old('name')" />
                    <x-form.input.error :messages="$errors->get('name')" />
                </x-form.input>

                <x-form.input>
                    <x-form.input.label for="username" :value="__('Username')" />
                    <x-form.input.text type="text" name="username" id="username" :value="old('username')" />
                    <x-form.input.error :messages="$errors->get('username')" />
                </x-form.input>

                <x-form.input>
                    <x-form.input.label for="email" :value="__('Email')" />
                    <x-form.input.text type="text" name="email" id="email" :value="old('email')" />
                    <x-form.input.error :messages="$errors->get('email')" />
                </x-form.input>

                <x-form.input>
                    <x-form.input.label for="password" :value="__('Password')" />
                    <x-form.input.text type="password" name="password" id="password" />
                    <x-form.input.error :messages="$errors->get('password')" />
                </x-form.input>

                <x-form.input>
                    <x-form.input.label for="file" :value="__('File')" />
                    <x-form.input.text type="text" name="file" id="file" :value="old('file')" />
                    <x-form.input.error :messages="$errors->get('file')" />
                </x-form.input>

                <x-link :href="route('user.index')" :value="__('Kembali')" icon="bi bi-arrow-left" class="btn btn-secondary me-2" />

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-send"></i>
                    {{ __('Kirim') }}
                </button>
            </x-form>
        </x-card.body>
    </x-card>
</x-app-layout>
