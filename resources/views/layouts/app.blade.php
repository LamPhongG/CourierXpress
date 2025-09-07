<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>CourierXpress</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body style="background-color: #FAFAFA;">
    @include('layouts.header')

    <main class="container mx-auto pt-20">
        @yield('content')
    </main>

    @include('components.footer')
    
</body>
</html> 
