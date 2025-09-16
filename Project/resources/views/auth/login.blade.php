@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-orange-600">CourierXpress</h2>
            <p class="mt-2 text-sm text-gray-600">{{ __('auth.login_title') }}</p>
            
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
        <!-- Test Account Info -->
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
            <h3 class="text-sm font-medium text-blue-800 mb-2">📝 {{ __('auth.test_accounts') }}</h3>
            <div class="text-xs text-blue-700 space-y-1">
                <p><strong>{{ __('auth.admin_account') }}:</strong> admin@courierxpress.com | 123456</p>
                <p><strong>{{ __('auth.customer_account') }}:</strong> customer@courierxpress.com | 123456</p>
                <p><strong>{{ __('auth.agent_account') }}:</strong> agent@courierxpress.com | 123456</p>
                <p><strong>{{ __('auth.shipper_account') }}:</strong> shipper@courierxpress.com | 123456</p>
            </div>
            <p class="text-xs text-blue-600 mt-2">
                <a href="/test-accounts" class="underline hover:text-blue-800">{{ __('auth.view_more_info') }}</a> | 
                <a href="/fix-admin-password" class="underline hover:text-blue-800">{{ __('auth.reset_admin_password') }}</a>
            </p>
        </div>
        <div class="bg-white py-8 px-4 shadow-lg rounded-lg sm:px-10">
            <form class="space-y-6" action="{{ route('login.store') }}" method="POST">
                @csrf
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('auth.email') }}</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" required 
                               class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                               placeholder="{{ __('auth.email_placeholder') }}"
                               value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('auth.password') }}</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" required 
                               class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                               placeholder="{{ __('auth.password_placeholder') }}">
                    </div>
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- General Errors -->
                @if(session('error'))
                    <div class="bg-red-50 border border-red-200 rounded-md p-4">
                        <p class="text-sm text-red-600">{{ session('error') }}</p>
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-50 border border-red-200 rounded-md p-4">
                        <ul class="text-sm text-red-600 list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember" type="checkbox" 
                               class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                            {{ __('auth.remember_me') }}
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="{{ route('password.request') }}" class="font-medium text-orange-600 hover:text-orange-500">
                            {{ __('auth.forgot_password') }}
                        </a>
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" 
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition duration-150 ease-in-out">
                        {{ __('auth.login_button') }}
                    </button>
                </div>

                <!-- Register Link -->
                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        {{ __('auth.no_account') }}
                        <a href="{{ route('register') }}" class="font-medium text-orange-600 hover:text-orange-500">
                            {{ __('auth.register_link') }}
                        </a>
                    </p>
                </div>
            </form>
            
            <!-- Debug Section -->
            <div class="mt-6 p-4 bg-gray-50 rounded-lg border">
                <h4 class="text-sm font-medium text-gray-700 mb-2">🔧 Debug Tools:</h4>
                <div class="space-y-2 text-xs">
                    <div class="flex space-x-2">
                        <a href="/debug-users" target="_blank" class="text-blue-600 hover:underline">Xem Users</a>
                        <a href="/test-password" target="_blank" class="text-blue-600 hover:underline">Test Password</a>
                        <a href="/create-test-user" target="_blank" class="text-green-600 hover:underline">Tạo Test User</a>
                    </div>
                    <div class="flex space-x-2">
                        <a href="/fix-all-passwords" target="_blank" class="text-orange-600 hover:underline font-semibold">Fix All Passwords</a>
                        <a href="/reset-all-users" target="_blank" class="text-red-600 hover:underline font-semibold">Reset All Users</a>
                    </div>
                    <div class="flex space-x-2">
                        <a href="/emergency-fix-agent" target="_blank" class="text-purple-600 hover:underline font-semibold">🚨 Emergency Fix Agent</a>
                        <a href="/test-dashboard-access" target="_blank" class="text-indigo-600 hover:underline font-semibold">🎯 Test Dashboard</a>
                        <a href="/debug-current-user" target="_blank" class="text-cyan-600 hover:underline font-semibold">🔍 Check Current User</a>
                    </div>
                    <p class="text-gray-600">⚠️ Password hiện tại hiển thị dạng text thường (không mã hóa)</p>
                    <p class="text-red-600 text-xs font-medium">🔴 Nếu gặp lỗi "password does not use Bcrypt", hãy click "Reset All Users"</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

