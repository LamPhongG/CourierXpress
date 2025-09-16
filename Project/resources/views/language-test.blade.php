<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Test - CourierXpress</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl w-full">
            <h1 class="text-3xl font-bold text-orange-600 mb-6 text-center">🌐 Language Test</h1>
            
            <!-- Current Status -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                <h3 class="text-lg font-semibold text-blue-800 mb-2">📊 Current Status</h3>
                <div class="grid grid-cols-2 gap-4 text-sm">
                    <div>
                        <strong>Session Locale:</strong> {{ Session::get('locale', 'vi') }}
                    </div>
                    <div>
                        <strong>App Locale:</strong> {{ app()->getLocale() }}
                    </div>
                </div>
            </div>
            
            <!-- Language Switcher -->
            <div class="flex justify-center space-x-4 mb-6">
                <a href="{{ route('language.change', 'vi') }}" 
                   class="px-6 py-3 rounded-lg font-medium border-2 transition duration-200 {{ Session::get('locale', 'vi') == 'vi' ? 'bg-orange-600 text-white border-orange-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50' }}">
                    🇻🇳 Tiếng Việt
                </a>
                <a href="{{ route('language.change', 'en') }}" 
                   class="px-6 py-3 rounded-lg font-medium border-2 transition duration-200 {{ Session::get('locale', 'vi') == 'en' ? 'bg-orange-600 text-white border-orange-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50' }}">
                    🇺🇸 English
                </a>
            </div>
            
            <!-- Test Translations -->
            <div class="space-y-4">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-gray-700 mb-2">Login Title:</h3>
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
            </div>
            
            <!-- Debug Info -->
            <div class="mt-6 bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                <h3 class="text-lg font-semibold text-yellow-800 mb-2">🔧 Debug Info</h3>
                <div class="text-sm space-y-2">
                    <p><strong>Session Data:</strong> {{ json_encode(Session::all()) }}</p>
                    <p><strong>Config Locale:</strong> {{ config('app.locale') }}</p>
                    <p><strong>Fallback Locale:</strong> {{ config('app.fallback_locale') }}</p>
                </div>
            </div>
            
            <!-- Test Links -->
            <div class="mt-6 flex justify-center space-x-4">
                <a href="{{ route('login') }}" class="bg-orange-600 text-white px-6 py-2 rounded-lg hover:bg-orange-700 transition duration-200">
                    🚀 Test Login Page
                </a>
                <a href="{{ route('register') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    📝 Test Register Page
                </a>
                <a href="{{ route('test.language') }}" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition duration-200" target="_blank">
                    🔍 API Test
                </a>
            </div>
            
            <!-- Instructions -->
            <div class="mt-6 bg-green-50 border border-green-200 rounded-lg p-4">
                <h3 class="text-lg font-semibold text-green-800 mb-2">📋 Instructions</h3>
                <ol class="list-decimal list-inside space-y-1 text-green-700 text-sm">
                    <li>Click on language buttons above</li>
                    <li>Notice how the status and translations change</li>
                    <li>Click "Test Login Page" to see the actual login form</li>
                    <li>If translations don't change, check the API test link</li>
                </ol>
            </div>
        </div>
    </div>
</body>
</html>
