@section('title','Forgot Password')
<x-guest-layout>

    <div class="flex flex-col md:flex-row w-full min-h-screen">
        <!-- Kiri: Logo -->
        <div class="w-full md:w-1/2 flex items-center justify-center bg-white p-6">
            <img src="/images/techhunt.png" class="max-w-[600px] w-full h-auto" alt="TechHunt Logo">
          </div>

          <div class="w-full md:w-1/2 flex items-center justify-center bg-gray-100 px-6 py-12">
            <div class="w-full max-w-xl">
                <div class="text-left mb-8">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="bg-white p-8 rounded-lg shadow-md w-full">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div> 
</x-guest-layout>
