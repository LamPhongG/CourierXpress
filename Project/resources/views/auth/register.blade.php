@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-orange-600">CourierXpress</h2>
            <p class="mt-2 text-sm text-gray-600">{{ __('auth.register_title') }}</p>
            
            <!-- Language Switcher -->
            <div class="mt-4 flex justify-center space-x-3">
                <a href="{{ route('language.change', 'vi') }}" 
                   class="px-4 py-2 text-sm font-medium rounded-lg border-2 transition duration-200 {{ Session::get('locale', 'vi') == 'vi' ? 'bg-orange-600 text-white border-orange-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50' }}">
                    🇻🇳 Tiếng Việt
                </a>
                <a href="{{ route('language.change', 'en') }}" 
                   class="px-4 py-2 text-sm font-medium rounded-lg border-2 transition duration-200 {{ Session::get('locale', 'vi') == 'en' ? 'bg-orange-600 text-white border-orange-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50' }}">
                    🇺🇸 English
                </a>
            </div>
        </div>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow-lg rounded-lg sm:px-10">
            <form class="space-y-6" action="{{ route('register.store') }}" method="POST">
                @csrf

                <!-- Full Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('auth.full_name') }}</label>
                    <div class="mt-1">
                        <input id="name" name="name" type="text" required 
                               class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                               placeholder="{{ __('auth.full_name_placeholder') }}">
                    </div>
                </div>

                <!-- Phone Number -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">{{ __('auth.phone_number') }}</label>
                    <div class="mt-1 relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <span class="text-gray-500 text-sm">+84</span>
                        </div>
                        <input id="phone" name="phone" type="tel" required 
                               class="appearance-none block w-full pl-12 pr-3 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                               placeholder="{{ __('auth.phone_placeholder') }}">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('auth.email') }}</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" required 
                               class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                               placeholder="{{ __('auth.email_placeholder') }}">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('auth.password') }}</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" required 
                               class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                               placeholder="{{ __('auth.password_placeholder') }}">
                    </div>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">{{ __('auth.confirm_password') }}</label>
                    <div class="mt-1">
                        <input id="password_confirmation" name="password_confirmation" type="password" required 
                               class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                               placeholder="{{ __('auth.confirm_password_placeholder') }}">
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" 
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition duration-150 ease-in-out">
                        {{ __('auth.register_button') }}
                    </button>
                </div>

                <!-- Login Link -->
                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        {{ __('auth.has_account') }}
                        <a href="{{ route('login') }}" class="font-medium text-orange-600 hover:text-orange-500">
                            {{ __('auth.login_link') }}
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

