@section('title','Login')

<x-guest-layout>

    <div class="flex flex-col md:flex-row w-full min-h-screen">
        <!-- Kiri: Logo -->
        <div class="w-full md:w-1/2 flex items-center justify-center bg-white p-6">
            <img src="/images/techhunt.png" class="max-w-[600px] w-full h-auto" alt="TechHunt Logo">
          </div>    

            <!-- Kanan: Form login -->
            <div class="w-full md:w-1/2 flex items-center justify-center bg-gray-100 px-6 py-12">
                <div class="w-full max-w-xl">
                    <div class="text-left mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 leading-snug">
                            Welcome Back!
                        </h2>
                    </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="bg-white p-8 rounded-lg shadow-md w-full">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
