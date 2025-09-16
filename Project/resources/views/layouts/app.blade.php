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
    
    <style>
        @keyframes deliveryElementsAnimation {
            0%, 100% { 
                opacity: 0.3;
                transform: translateY(0px);
            }
            50% { 
                opacity: 0.6;
                transform: translateY(-5px);
            }
        }
        
        @keyframes deliveryBackgroundAnimation {
            0% { 
                background-position: 0% 0%, 0% 0%, 0% 0%, 0% 0%;
                filter: brightness(1) hue-rotate(0deg);
            }
            25% { 
                background-position: 25% 25%, 0% 0%, 0% 0%, 25% 25%;
                filter: brightness(1.1) hue-rotate(5deg);
            }
            50% { 
                background-position: 50% 50%, 0% 0%, 0% 0%, 50% 50%;
                filter: brightness(1.2) hue-rotate(10deg);
            }
            75% { 
                background-position: 75% 75%, 0% 0%, 0% 0%, 75% 75%;
                filter: brightness(1.1) hue-rotate(5deg);
            }
            100% { 
                background-position: 100% 100%, 0% 0%, 0% 0%, 100% 100%;
                filter: brightness(1) hue-rotate(0deg);
            }
        }
        
        /* Responsive cho mobile */
        @media (max-width: 768px) {
            body {
                background-attachment: scroll !important;
            }
        }
    </style>
</head>
<body class="bg-gray-50" style="background: 
    /* Overlay tối để text dễ đọc */
    linear-gradient(135deg, rgba(35, 47, 62, 0.7), rgba(19, 25, 33, 0.8)),
    /* Gradient mô phỏng ảnh giao hàng - bầu trời */
    linear-gradient(180deg, #87CEEB 0%, #98D8E8 20%, #B0E0E6 40%, #E0F6FF 60%, #F0F8FF 100%),
    /* Gradient mô phỏng đường phố */
    linear-gradient(45deg, #696969 0%, #808080 25%, #A9A9A9 50%, #C0C0C0 75%, #D3D3D3 100%),
    /* Gradient mô phỏng ánh sáng mặt trời */
    radial-gradient(circle at 70% 30%, rgba(255, 255, 255, 0.4) 0%, transparent 60%);
    background-size: 100% 100%, 100% 100%, 100% 100%, 200% 200%;
    background-attachment: fixed;
    min-height: 100vh;
    position: relative;
    animation: deliveryBackgroundAnimation 20s ease-in-out infinite;">
    
    <!-- Background elements mô phỏng ảnh giao hàng -->
    <div class="absolute inset-0 pointer-events-none" style="background-image: 
        /* Mô phỏng nhân viên giao hàng (hình tròn cam) */
        radial-gradient(circle at 20% 70%, rgba(255, 153, 0, 0.3) 0%, transparent 15%),
        /* Mô phỏng khách hàng (hình tròn nhỏ) */
        radial-gradient(circle at 80% 60%, rgba(255, 255, 255, 0.4) 0%, transparent 10%),
        /* Mô phỏng gói hàng (hình vuông) */
        linear-gradient(45deg, transparent 40%, rgba(139, 69, 19, 0.2) 45%, rgba(139, 69, 19, 0.2) 55%, transparent 60%),
        /* Mô phỏng đường phố */
        linear-gradient(90deg, transparent 0%, rgba(105, 105, 105, 0.1) 20%, rgba(105, 105, 105, 0.1) 80%, transparent 100%);
        background-size: 200px 200px, 100px 100px, 150px 100px, 100% 20px;
        background-position: 20% 70%, 80% 60%, 50% 65%, 0% 80%;
        animation: deliveryElementsAnimation 15s ease-in-out infinite;
        z-index: 1;">
    </div>
    
    @include('layouts.header')

    <main class="container mx-auto pt-20 relative z-10">
        @yield('content')
    </main>

    
</body>
</html> 
