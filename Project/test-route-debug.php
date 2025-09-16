<?php

// Test script để debug route issue
echo "🔧 Debugging Route Issue...\n\n";

// Test 1: Check if we can access the route directly
$testUrl = 'http://127.0.0.1:8000/test-password-route';
echo "🧪 Test 1: Direct URL access\n";
echo "URL: {$testUrl}\n";

// Test 2: Check if we can access forgot password
$forgotUrl = 'http://127.0.0.1:8000/forgot-password';
echo "\n🧪 Test 2: Forgot Password URL\n";
echo "URL: {$forgotUrl}\n";

// Test 3: Check if we can access login
$loginUrl = 'http://127.0.0.1:8000/login';
echo "\n🧪 Test 3: Login URL\n";
echo "URL: {$loginUrl}\n";

echo "\n📋 Instructions:\n";
echo "1. Open browser and go to: {$loginUrl}\n";
echo "2. Click 'Quên mật khẩu?' link\n";
echo "3. If it works, you should see forgot password page\n";
echo "4. If it doesn't work, check browser console for errors\n";

echo "\n🔍 Debug Steps:\n";
echo "1. Check if server is running: php artisan serve\n";
echo "2. Check routes: php artisan route:list | findstr password\n";
echo "3. Clear cache: php artisan optimize:clear\n";
echo "4. Check controller exists: ls app/Http/Controllers/Auth/PasswordResetController.php\n";

echo "\n✅ If all above are OK, the route should work!\n";

