<x-app-layout>
    <x-slot name="title">
        {{ __('User Baru') }}
    </x-slot>
    {{-- <x-slot name="button">
        <button type="submit" class="btn btn-primary">
            {{ __('Mulai') }}
        </button>
    </x-slot> --}}

    <x-card>
        <x-card.body>
            <x-form action="{{ route('login') }}" method="post">
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
                <button type="submit" class="btn btn-primary">
                    {{ __('Kirim') }}
                </button>
            </x-form>

        </x-card.body>
    </x-card>
</x-app-layout>
