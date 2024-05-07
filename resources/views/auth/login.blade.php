<x-guest-layout>
    <section class="container mt-5 py-5">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="text-center mb-5">
                    <img src="{{ asset('image/laravel.svg') }}" alt="logo" width="70">
                </div>
                <x-card>
                    <x-card.body>

                        @if (session('status'))
                            <div class="font-medium text-sm text-green-600 mb-5">
                                {{ session('status') }}
                            </div>
                        @endif

                        <x-form action="{{ route('login') }}" method="post">
                            @csrf
                            <x-form.input>
                                <x-form.input.label for="email" :value="__('Email / Username')" />
                                <x-form.input.text type="text" name="email" id="email" :value="old('email')" />
                                <x-form.input.error :messages="$errors->get('email')" />
                            </x-form.input>
                            <x-form.input>
                                <x-form.input.label for="password" :value="__('Password')" />
                                <x-form.input.text type="password" name="password" id="password" />
                                <x-form.input.error :messages="$errors->get('password')" />
                            </x-form.input>
                            <x-form.checkbox>
                                <x-form.checkbox.input type="checkbox" name="remember" id="remember_me" />
                                <x-form.checkbox.label for="remember_me" :value="__('Ingat saya')" />
                            </x-form.checkbox>

                            <x-div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Log in') }}
                                </button>
                            </x-div>

                            <x-div class="float-end">
                                <x-link href="/" :value="__('Lupa kata sandi anda?')" />
                            </x-div>
                        </x-form>
                    </x-card.body>
                </x-card>
            </div>
        </div>
    </section>
</x-guest-layout>
