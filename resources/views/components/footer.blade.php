<footer class="bg-white border-t border-gray-200 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Top Section with Logo and App Store Links -->
        <div class="flex flex-col lg:flex-row justify-between items-start mb-12">
            <div class="flex items-center mb-6 lg:mb-0">
                <div class="flex items-center">
                    
                    <span class="text-2xl font-bold text-gray-900">
                        <img src="{{ asset('images/baohop.png') }}" alt="Logo" class="h-14 w-26 mr-2">
                    </span>
                </div>
            </div>
            
            <!-- App Store Links -->
            <div class="flex space-x-4">
                <a href="#" class="inline-block">
                    <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" 
                         alt="Download on App Store" class="h-12">
                </a>
                <a href="#" class="inline-block">
                    <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" 
                         alt="Get it on Google Play" class="h-12">
                </a>
            </div>
        </div>

        <!-- Main Footer Content -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 mb-12">
            <!-- Dịch vụ -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.services') }}</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.delivery_service') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.electric_vehicle_rental') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.truck_service') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.house_moving_service') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.business_service') }}</a></li>
                </ul>
            </div>

            <!-- Công ty -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.company') }}</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.about_us') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.news') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.recruitment') }}</a></li>
                </ul>
            </div>

            <!-- Khách hàng -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.customers') }}</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.individual_customers') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.business_customers') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.customer_community') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.support_center') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.integrated_account') }}</a></li>
                </ul>
            </div>

            <!-- Hỗ trợ -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.support') }}</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.policy_terms') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.customer_support_center') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.driver_support_center') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.development_platform') }}</a></li>
                </ul>
            </div>

            <!-- Tài xế -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.drivers') }}</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.register_new_driver') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.driver_community') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.driver_handbook') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.support_center') }}</a></li>
                </ul>
            </div>

            <!-- Đường dẫn nhanh -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.quick_links') }}</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.customer_support_center') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.driver_support_center') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.development_platform') }}</a></li>
                </ul>
            </div>
        </div>

        <!-- Company Information -->
        <div class="border-t border-gray-200 pt-8">
            <div class="flex flex-col lg:flex-row justify-between items-start mb-8">
                <div class="mb-6 lg:mb-0 flex-1">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.company_name_full') }}</h4>
                    <div class="space-y-3 text-gray-600">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ __('messages.hcm_office') }}: Tầng 1, Tòa nhà Revera Park, 7/28 Thành Thái, Phường Điện Hồng, (Quận 10)</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ __('messages.hanoi_office') }}: Tầng 9, Tòa nhà Micec, số 229 Tây Sơn, Phường Kim Liên, (Quận Đống Đa)</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ __('messages.danang_office') }}: 66A Lê Đình Ly, Phường Thanh Khê</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            <span>support@courierxpress.vn</span>
                        </div>
                    </div>

                    <!-- Social Media & Connect -->
                    <div class="mt-6">
                        <p class="text-gray-700 font-medium mb-3">{{ __('messages.connect_with_us') }}</p>
                        <div class="flex space-x-3">
                            <a href="#" class="w-8 h-8 bg-blue-600 rounded flex items-center justify-center hover:bg-blue-700 transition-colors">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-8 h-8 bg-blue-500 rounded flex items-center justify-center hover:bg-blue-600 transition-colors">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-8 h-8 bg-red-600 rounded flex items-center justify-center hover:bg-red-700 transition-colors">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-8 h-8 bg-gray-800 rounded flex items-center justify-center hover:bg-gray-900 transition-colors">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0C5.374 0 0 5.373 0 12s5.374 12 12 12 12-5.373 12-12S18.626 0 12 0zm5.568 8.16c-.169 1.858-.896 3.49-2.068 4.663-1.173 1.173-2.805 1.899-4.663 2.068-1.197.109-2.397.109-3.594 0-1.858-.169-3.49-.895-4.663-2.068C1.407 11.65.681 10.018.512 8.16c-.109-1.197-.109-2.397 0-3.594C.681 2.708 1.407 1.076 2.58-.097 3.753-1.27 5.385-1.996 7.243-2.165c1.197-.109 2.397-.109 3.594 0 1.858.169 3.49.895 4.663 2.068 1.173 1.173 1.899 2.805 2.068 4.663.109 1.197.109 2.397 0 3.594z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Language Selector & Certification -->
                <div class="flex flex-col items-end space-y-4">
                    <div class="relative">
                        <select class="appearance-none bg-white border border-gray-300 rounded-lg px-4 py-2 pr-8 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                            <option value="vi">🇻🇳 Tiếng Việt</option>
                            <option value="en">🇺🇸 English</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Official Certification Badge -->
                    <div class="inline-flex items-center bg-blue-600 rounded-lg overflow-hidden shadow-sm">
                        <!-- Left circle with checkmark -->
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mr-0 relative" style="margin-right: -8px; z-index: 1;">
                            <!-- White checkmark -->
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                        </div>
                        <!-- Right text section -->
                        <div class="bg-blue-600 text-white px-4 py-3 pl-6">
                            <div class="font-bold text-sm leading-tight">{{ __('messages.verified_business') }}</div>
                            <div class="font-bold text-sm leading-tight">{{ __('messages.ministry_certified') }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Legal Information -->
            <div class="border-t border-gray-200 pt-6 text-sm text-gray-600 space-y-2">
                <p>{{ __('messages.business_license') }}: 0313506115 {{ __('messages.issued_date') }} 26/10/2015 {{ __('messages.issued_by') }} {{ __('messages.hcm_investment_dept') }}, {{ __('messages.amended_date') }} 12/02/2025.</p>
                <p>{{ __('messages.transport_license') }}: 2418/XN-BTTTT {{ __('messages.issued_by') }} {{ __('messages.transport_ministry') }} {{ __('messages.issued_date') }} 11/04/2017, {{ __('messages.amended_date') }} 24/7/2019.</p>
                <p>{{ __('messages.business_address') }}: 405/15 Xô Viết Nghệ Tĩnh, Phường 14, Quận Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam</p>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="border-t border-gray-200 pt-8 mt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-600 text-sm">
                    © {{ date('Y') }} CourierXpress. {{ __('messages.all_rights_reserved') }}
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-orange-500 transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-orange-500 transition-colors">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-orange-500 transition-colors">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
