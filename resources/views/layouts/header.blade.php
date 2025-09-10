<header class="fixed top-0 left-0 w-full shadow-md z-50" style="background-color: #FAFAFA; color: #374151;">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between h-16">
            
        <!-- Logo -->
            <div class="flex items-center flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center hover:opacity-80 transition duration-300">
                    <img src="{{ asset('images/baohop.png') }}" alt="CourierXpress Logo" class="h-14 w-26 mr-2 cursor-pointer">
                    <span class="text-xl font-bold"></span>
                </a>
            </div>

            <!-- Center Navigation -->
            <nav class="hidden lg:flex items-center justify-center flex-1 px-4">
                <div class="flex items-center space-x-8 max-w-4xl w-full justify-between">
                
                <!-- Delivery Dropdown -->
                <div class="relative group">
                    <button class="hover:text-orange-600 flex items-center space-x-1 text-base font-medium px-2 py-2 rounded transition duration-300 whitespace-nowrap">
                        <span>{{ __('lalamove.delivery') }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute top-full left-0 mt-1 w-72 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="py-3">
                            <a href="{{ route('dich-vu.giao-hang') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600 border-b border-gray-100 last:border-b-0">
                                <div class="font-semibold text-base mb-1">{{ __('messages.delivery_service') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.delivery_service_desc') }}</div>
                            </a>
                            <a href="{{ route('dich-vu.xe-tai') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600 border-b border-gray-100 last:border-b-0">
                                <div class="font-semibold text-base mb-1">{{ __('messages.truck_service') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.truck_service_desc') }}</div>
                            </a>
                            <a href="{{ route('dich-vu.chuyen-nha') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600 border-b border-gray-100 last:border-b-0">
                                <div class="font-semibold text-base mb-1">{{ __('messages.moving_service') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.moving_service_desc') }}</div>
                            </a>
                            <a href="{{ route('dich-vu.doanh-nghiep') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600">
                                <div class="font-semibold text-base mb-1">{{ __('messages.enterprise_service') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.enterprise_service_desc') }}</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Customers Dropdown -->
                <div class="relative group">
                    <button class="hover:text-orange-600 flex items-center space-x-1 text-base font-medium px-2 py-2 rounded transition duration-300 whitespace-nowrap">
                        <span>{{ __('messages.customers') }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute top-full left-0 mt-1 w-72 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="py-3">
                            <a href="{{ route('khach-hang.ca-nhan') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600 border-b border-gray-100 last:border-b-0">
                                <div class="font-semibold text-base mb-1">{{ __('messages.individual_customer') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.individual_customer_desc') }}</div>
                            </a>
                            <a href="{{ route('khach-hang.doanh-nghiep') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600 border-b border-gray-100 last:border-b-0">
                                <div class="font-semibold text-base mb-1">{{ __('messages.business_customer') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.business_customer_desc') }}</div>
                            </a>
                            <a href="{{ route('cong-dong.ho-tro') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600">
                                <div class="font-semibold text-base mb-1">{{ __('messages.community_support') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.community_support_desc') }}</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Driver Dropdown -->
                <div class="relative group">
                    <button class="hover:text-orange-600 flex items-center space-x-1 text-base font-medium px-2 py-2 rounded transition duration-300 whitespace-nowrap">
                        <span>{{ __('messages.drivers') }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute top-full left-0 mt-1 w-72 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="py-3">
                            <a href="{{ route('tai-xe.dang-ky') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600 border-b border-gray-100 last:border-b-0">
                                <div class="font-semibold text-base mb-1">{{ __('messages.driver_registration') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.driver_registration_desc') }}</div>
                            </a>
                            <a href="{{ route('tai-xe.cong-dong') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600 border-b border-gray-100 last:border-b-0">
                                <div class="font-semibold text-base mb-1">{{ __('messages.driver_community') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.driver_community_desc') }}</div>
                            </a>
                            <a href="{{ route('tai-xe.cam-nang') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600">
                                <div class="font-semibold text-base mb-1">{{ __('messages.driver_handbook') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.driver_handbook_desc') }}</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Support Dropdown -->
                <div class="relative group">
                    <button class="hover:text-orange-600 flex items-center space-x-1 text-base font-medium px-2 py-2 rounded transition duration-300 whitespace-nowrap">
                        <span>{{ __('messages.support') }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute top-full left-0 mt-1 w-72 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="py-3">
                            <a href="{{ route('ho-tro.khach-hang') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600 border-b border-gray-100 last:border-b-0">
                                <div class="font-semibold text-base mb-1">{{ __('messages.customer_support') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.customer_support_desc') }}</div>
                            </a>
                            <a href="{{ route('ho-tro.tai-xe') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600">
                                <div class="font-semibold text-base mb-1">{{ __('messages.driver_support') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.driver_support_desc') }}</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Company Dropdown -->
                <div class="relative group">
                    <button class="hover:text-orange-600 flex items-center space-x-1 text-base font-medium px-2 py-2 rounded transition duration-300 whitespace-nowrap">
                        <span>{{ __('messages.recruitment') }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute top-full left-0 mt-1 w-80 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="py-3">
                            <a href="{{ route('tuyen-dung.ve-chung-toi') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600 border-b border-gray-100 last:border-b-0">
                                <div class="font-semibold text-base mb-1">{{ __('messages.about_us') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.about_us_desc') }}</div>
                            </a>
                            <a href="{{ route('tuyen-dung.cau-chuyen') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600 border-b border-gray-100 last:border-b-0">
                                <div class="font-semibold text-base mb-1">{{ __('messages.our_story') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.our_story_desc') }}</div>
                            </a>
                            <a href="{{ route('tuyen-dung.gia-nhap') }}" class="block px-4 py-3 text-gray-800 hover:bg-orange-50 hover:text-orange-600">
                                <div class="font-semibold text-base mb-1">{{ __('messages.join_us') }}</div>
                                <div class="text-sm text-gray-600">{{ __('messages.join_us_desc') }}</div>
                            </a>
                        </div>
                    </div>
                </div>
        </div>

        </nav>

            <!-- Right Side: Language + Auth -->
            <div class="flex items-center space-x-4 flex-shrink-0">
                
                <!-- Language Selector -->
                <div class="relative group">
                    <button class="flex items-center space-x-1 text-gray-700 hover:text-orange-600 transition duration-300 px-3 py-2 rounded text-base">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>
                            @if(Session::get('locale', 'vi') == 'vi')
                                VN - Tiếng Việt
                            @elseif(Session::get('locale', 'vi') == 'en')
                                VN - English
                            @else
                                VN - हिंदी
                            @endif
                        </span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute top-full right-0 mt-1 w-48 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="py-1">
                            <a href="{{ route('language.change', 'vi') }}" class="flex items-center px-3 py-2 text-gray-800 hover:bg-orange-50 hover:text-orange-600 text-sm {{ Session::get('locale', 'vi') == 'vi' ? 'bg-orange-50 text-orange-600' : '' }}">
                                <img src="https://flagcdn.com/w20/vn.png" alt="Vietnam" class="w-4 h-3 mr-2">
                                <span>Vietnam - Tiếng Việt</span>
                            </a>
                            <a href="{{ route('language.change', 'en') }}" class="flex items-center px-3 py-2 text-gray-800 hover:bg-orange-50 hover:text-orange-600 text-sm {{ Session::get('locale', 'vi') == 'en' ? 'bg-orange-50 text-orange-600' : '' }}">
                                <img src="https://flagcdn.com/w20/us.png" alt="English" class="w-4 h-3 mr-2">
                                <span>Vietnam - English</span>
                            </a>
                            <a href="{{ route('language.change', 'hi') }}" class="flex items-center px-3 py-2 text-gray-800 hover:bg-orange-50 hover:text-orange-600 text-sm {{ Session::get('locale', 'vi') == 'hi' ? 'bg-orange-50 text-orange-600' : '' }}">
                                <img src="https://flagcdn.com/w20/in.png" alt="Hindi" class="w-4 h-3 mr-2">
                                <span>Vietnam - हिंदी</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Login -->
                <a href="{{ route('login') }}" 
                   class="flex items-center text-gray-700 hover:text-orange-600 px-3 py-2 rounded transition duration-300 text-base"
                   style="pointer-events: auto; cursor: pointer; z-index: 9999; position: relative;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>{{ __('lalamove.login') }}</span>
                </a>

                <!-- Sign Up -->
                <a href="{{ route('register') }}" 
                   class="bg-orange-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-orange-700 transition duration-300 text-base"
                   style="pointer-events: auto; cursor: pointer; z-index: 9999; position: relative;">
                    {{ __('lalamove.sign_up') }}
                </a>

            </div>
        </div>
    </div>
</header>