<header class="fixed top-0 left-0 w-full bg-orange-600 text-white shadow-md z-50">
    <div class="container mx-auto flex justify-between items-center py-3 px-6">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <span class="flex items-center text-2xl font-bold">
                <img src="{{ asset('images/bao.png') }}" alt="Logo Báo" class="h-12 w-12 mr-2 brightness-0 invert">
                CourierXpress
            </span>
        </div>

        <!-- Menu -->
        <nav class="hidden md:flex space-x-6 font-medium">
            <a href="#" class="hover:text-gray-200">Vận chuyển</a>
            <a href="#" class="hover:text-gray-200">Theo dõi</a>
            <a href="#" class="hover:text-gray-200">Hỗ trợ</a>
            <a href="#" class="hover:text-gray-200">Tài khoản</a>
        </nav>

        <!-- Đăng nhập -->
        <div class="flex items-center space-x-4 bg-orange-500 p-2 rounded-lg">
            <!-- Thêm link Đăng ký -->
            <a href="{{ route('register') }}" class="flex items-center hover:text-gray-200 space-x-2">
                <!-- Icon user trắng -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0H5z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-white font-semibold">Đăng ký</span>
            </a>

            <!-- Thêm link Đăng nhập -->
            <a href="{{ route('login') }}" class="flex items-center hover:text-gray-200 space-x-2">
                <!-- Icon user trắng -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0H5z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-white font-semibold">Đăng nhập</span>
            </a>

            <button class="bg-white text-orange-600 font-semibold px-3 py-1 rounded-md hover:bg-gray-100 flex items-center space-x-2">
                <!-- Icon tìm kiếm -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                </svg>
                <span>Tìm kiếm</span>
            </button>
        </div>
    </div>
</header>
