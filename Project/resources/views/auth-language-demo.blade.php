@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-4xl">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-orange-600 mb-4">🌐 CourierXpress - Language Demo</h1>
            <p class="text-lg text-gray-600 mb-8">Test chức năng chuyển đổi ngôn ngữ cho Login & Register</p>
            
            <!-- Current Language Display -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                <h3 class="text-lg font-semibold text-blue-800 mb-2">📍 Current Language</h3>
                <p class="text-blue-700">
                    @if(Session::get('locale', 'vi') == 'vi')
                        🇻🇳 Tiếng Việt (Vietnamese)
                    @elseif(Session::get('locale', 'vi') == 'en')
                        🇺🇸 English
                    @else
                        🌐 {{ Session::get('locale', 'vi') }}
                    @endif
                </p>
            </div>
            
            <!-- Language Switcher -->
            <div class="flex justify-center space-x-4 mb-8">
                <a href="{{ route('language.change', 'vi') }}" 
                   class="px-6 py-3 rounded-lg font-medium transition duration-200 {{ Session::get('locale', 'vi') == 'vi' ? 'bg-orange-600 text-white' : 'bg-white text-gray-700 border border-gray-300 hover:bg-gray-50' }}">
                    🇻🇳 Tiếng Việt
                </a>
                <a href="{{ route('language.change', 'en') }}" 
                   class="px-6 py-3 rounded-lg font-medium transition duration-200 {{ Session::get('locale', 'vi') == 'en' ? 'bg-orange-600 text-white' : 'bg-white text-gray-700 border border-gray-300 hover:bg-gray-50' }}">
                    🇺🇸 English
                </a>
            </div>
        </div>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-4xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Login Demo -->
            <div class="bg-white py-8 px-6 shadow-lg rounded-lg">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">🔐 Login Demo</h2>
                
                <div class="space-y-4">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-700 mb-2">Title:</h3>
                        <p class="text-gray-600">{{ __('auth.login_title') }}</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-700 mb-2">Email Label:</h3>
                        <p class="text-gray-600">{{ __('auth.email') }}</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-700 mb-2">Password Label:</h3>
                        <p class="text-gray-600">{{ __('auth.password') }}</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-700 mb-2">Login Button:</h3>
                        <p class="text-gray-600">{{ __('auth.login_button') }}</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-700 mb-2">No Account Text:</h3>
                        <p class="text-gray-600">{{ __('auth.no_account') }}</p>
                    </div>
                </div>
                
                <div class="mt-6 text-center">
                    <a href="{{ route('login') }}" class="inline-block bg-orange-600 text-white px-6 py-2 rounded-lg hover:bg-orange-700 transition duration-200">
                        🚀 Test Login Page
                    </a>
                </div>
            </div>
            
            <!-- Register Demo -->
            <div class="bg-white py-8 px-6 shadow-lg rounded-lg">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">📝 Register Demo</h2>
                
                <div class="space-y-4">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-700 mb-2">Title:</h3>
                        <p class="text-gray-600">{{ __('auth.register_title') }}</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-700 mb-2">Full Name Label:</h3>
                        <p class="text-gray-600">{{ __('auth.full_name') }}</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-700 mb-2">Phone Label:</h3>
                        <p class="text-gray-600">{{ __('auth.phone_number') }}</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-700 mb-2">Register Button:</h3>
                        <p class="text-gray-600">{{ __('auth.register_button') }}</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-700 mb-2">Has Account Text:</h3>
                        <p class="text-gray-600">{{ __('auth.has_account') }}</p>
                    </div>
                </div>
                
                <div class="mt-6 text-center">
                    <a href="{{ route('register') }}" class="inline-block bg-orange-600 text-white px-6 py-2 rounded-lg hover:bg-orange-700 transition duration-200">
                        🚀 Test Register Page
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Validation Messages Demo -->
        <div class="mt-8 bg-white py-8 px-6 shadow-lg rounded-lg">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">⚠️ Validation Messages Demo</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-3">
                    <div class="bg-red-50 p-3 rounded-lg">
                        <p class="text-red-700"><strong>Name Required:</strong> {{ __('auth.name_required') }}</p>
                    </div>
                    <div class="bg-red-50 p-3 rounded-lg">
                        <p class="text-red-700"><strong>Email Required:</strong> {{ __('auth.email_required') }}</p>
                    </div>
                    <div class="bg-red-50 p-3 rounded-lg">
                        <p class="text-red-700"><strong>Email Invalid:</strong> {{ __('auth.email_invalid') }}</p>
                    </div>
                    <div class="bg-red-50 p-3 rounded-lg">
                        <p class="text-red-700"><strong>Email Unique:</strong> {{ __('auth.email_unique') }}</p>
                    </div>
                </div>
                
                <div class="space-y-3">
                    <div class="bg-red-50 p-3 rounded-lg">
                        <p class="text-red-700"><strong>Phone Required:</strong> {{ __('auth.phone_required') }}</p>
                    </div>
                    <div class="bg-red-50 p-3 rounded-lg">
                        <p class="text-red-700"><strong>Phone Unique:</strong> {{ __('auth.phone_unique') }}</p>
                    </div>
                    <div class="bg-red-50 p-3 rounded-lg">
                        <p class="text-red-700"><strong>Password Required:</strong> {{ __('auth.password_required') }}</p>
                    </div>
                    <div class="bg-red-50 p-3 rounded-lg">
                        <p class="text-red-700"><strong>Password Confirmed:</strong> {{ __('auth.password_confirmed') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Success Messages Demo -->
        <div class="mt-8 bg-white py-8 px-6 shadow-lg rounded-lg">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">✅ Success Messages Demo</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <p class="text-green-700 font-semibold">{{ __('auth.login_success') }}</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <p class="text-green-700 font-semibold">{{ __('auth.register_success') }}</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <p class="text-green-700 font-semibold">{{ __('auth.logout_success') }}</p>
                </div>
            </div>
        </div>
        
        <!-- Instructions -->
        <div class="mt-8 bg-blue-50 border border-blue-200 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-blue-800 mb-4">📋 How to Test:</h3>
            <ol class="list-decimal list-inside space-y-2 text-blue-700">
                <li>Click on language buttons above to switch between Vietnamese and English</li>
                <li>Notice how all text changes immediately</li>
                <li>Click "Test Login Page" or "Test Register Page" to see the actual forms</li>
                <li>Try submitting forms with invalid data to see validation messages</li>
                <li>Language preference is saved in session and persists across pages</li>
            </ol>
        </div>
    </div>
</div>
@endsection
