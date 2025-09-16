<?php

echo "<h1>Clear Cache Script</h1>";

try {
    // Clear các file cache thủ công
    $cacheDirectories = [
        __DIR__ . '/storage/framework/cache/data',
        __DIR__ . '/storage/framework/views',
        __DIR__ . '/bootstrap/cache'
    ];
    
    $filesDeleted = 0;
    
    foreach ($cacheDirectories as $dir) {
        if (is_dir($dir)) {
            $files = glob($dir . '/*');
            foreach ($files as $file) {
                if (is_file($file) && !in_array(basename($file), ['.gitignore', 'index.html'])) {
                    if (unlink($file)) {
                        $filesDeleted++;
                    }
                }
            }
            echo "<p>✓ Cleared cache in: $dir</p>";
        } else {
            echo "<p>⚠ Directory not found: $dir</p>";
        }
    }
    
    echo "<p style='color: green;'><strong>✓ Cache cleared successfully! Deleted $filesDeleted files.</strong></p>";
    
    // Kiểm tra cấu hình cache mới
    echo "<h2>Cache Configuration Status:</h2>";
    
    $envPath = __DIR__ . '/.env';
    if (file_exists($envPath)) {
        $envContent = file_get_contents($envPath);
        if (strpos($envContent, 'CACHE_STORE=array') !== false) {
            echo "<p style='color: green;'>✓ Cache driver set to 'array' (supports tagging)</p>";
        } elseif (strpos($envContent, 'CACHE_STORE=database') !== false) {
            echo "<p style='color: red;'>✗ Cache driver still set to 'database' (does not support tagging)</p>";
        } else {
            echo "<p style='color: orange;'>? Cache driver setting not found</p>";
        }
    }
    
    echo "<h2>Supported Cache Drivers for Tagging:</h2>";
    echo "<ul>";
    echo "<li>✓ <strong>array</strong> - In-memory cache (good for development)</li>";
    echo "<li>✓ <strong>redis</strong> - Redis cache server (good for production)</li>";
    echo "<li>✓ <strong>memcached</strong> - Memcached server</li>";
    echo "<li>✗ <strong>database</strong> - Database cache (does NOT support tagging)</li>";
    echo "<li>✗ <strong>file</strong> - File-based cache (does NOT support tagging)</li>";
    echo "</ul>";
    
    echo "<h2>Troubleshooting:</h2>";
    echo "<ol>";
    echo "<li>Restart Apache/web server after changing cache configuration</li>";
    echo "<li>If using browser, refresh the page (Ctrl+F5)</li>";
    echo "<li>Check that .env file contains CACHE_STORE=array</li>";
    echo "<li>Test the forgot password functionality again</li>";
    echo "</ol>";
    
    echo "<h2>Test Links:</h2>";
    echo "<ul>";
    echo "<li><a href='/login'>Login Page</a> - Test 'Quên mật khẩu?' link</li>";
    echo "<li><a href='/forgot-password'>Forgot Password</a> - Direct test</li>";
    echo "</ul>";
    
} catch (Exception $e) {
    echo "<p style='color: red;'>Error: " . $e->getMessage() . "</p>";
}

echo "<p><em>Script completed at: " . date('Y-m-d H:i:s') . "</em></p>";
?>