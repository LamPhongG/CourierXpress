@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-orange-600">CourierXpress</h2>
            <p class="mt-2 text-sm text-gray-600">{{ __('auth.reset_password_title') }}</p>
            
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
            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 bg-green-50 border border-green-200 rounded-lg p-3">
                    {{ session('status') }}
                </div>
            @endif

            <form class="space-y-6" action="{{ route('password.store') }}" method="POST">
                @csrf
                
                <!-- Hidden fields -->
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}">
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        {{ __('auth.email') }}
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email_display" type="email" 
                               value="{{ $email }}" readonly
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-gray-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        {{ __('auth.new_password') }}
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="new-password" required 
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('password') border-red-500 @enderror"
                               placeholder="{{ __('auth.new_password_placeholder') }}">
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                        {{ __('auth.confirm_password') }}
                    </label>
                    <div class="mt-1">
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required 
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('password_confirmation') border-red-500 @enderror"
                               placeholder="{{ __('auth.confirm_password_placeholder') }}">
                    </div>
                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" 
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition duration-200">
                        {{ __('auth.reset_password') }}
                    </button>
                </div>
            </form>

            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300" />
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">{{ __('auth.or') }}</span>
                    </div>
                </div>

                <div class="mt-6 text-center">
                    <a href="{{ route('login') }}" 
                       class="font-medium text-orange-600 hover:text-orange-500 transition duration-200">
                        {{ __('auth.back_to_login') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
