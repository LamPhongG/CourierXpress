<footer class="bg-white border-t border-gray-200 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Top Section with Logo and App Store Links -->
        <div class="flex flex-col lg:flex-row justify-between items-start mb-12">
            <div class="flex items-center mb-6 lg:mb-0">
                <div class="flex items-center">
                    <img src="{{ asset('images/baohop.png') }}" alt="CourierXpress Logo" class="h-14 w-26 mr-2">
                    <span class="text-2xl font-bold text-gray-900">CourierXpress</span>
                </div>
            </div>
            
            <!-- App Store Links -->
            <div class="flex space-x-4">
                <a href="#" class="inline-block hover:opacity-80 transition-opacity">
                    <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" 
                         alt="Download on App Store" class="h-12">
                </a>
                <a href="#" class="inline-block hover:opacity-80 transition-opacity">
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
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.policy_and_terms') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.customer_support_center') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.driver_support_center') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.platform_development') }}</a></li>
                </ul>
            </div>

            <!-- Tài xế -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.drivers') }}</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.register_new_driver') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.driver_community') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.driver_benefits') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.support_center') }}</a></li>
                </ul>
            </div>

            <!-- Đường dẫn nhanh -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.quick_links') }}</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.customer_support_center') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.driver_support_center') }}</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-orange-500 transition-colors">{{ __('messages.platform_development') }}</a></li>
                </ul>
            </div>
        </div>

        <!-- Company Information Section -->
        <div class="border-t border-gray-200 pt-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Company Details -->
                <div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.company_info') }}</h4>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><i class="fas fa-map-marker-alt mr-2 text-orange-500"></i>{{ __('messages.hcm_office') }}: Tầng 1, Tòa nhà Revera Park, 7/28 Thành Thái, Phường Điện Hồng, (Quận 10)</p>
                        <p><i class="fas fa-map-marker-alt mr-2 text-orange-500"></i>{{ __('messages.hanoi_office') }}: Tầng 9, Tòa nhà Mipec, số 229 Tây Sơn, Phường Kim Liên, (Quận Đống Đa)</p>
                        <p><i class="fas fa-map-marker-alt mr-2 text-orange-500"></i>{{ __('messages.danang_office') }}: 66A Lê Đình Lý, Phường Thanh Khê</p>
                        <p><i class="fas fa-envelope mr-2 text-orange-500"></i>{{ __('messages.support_email') }}: support@courierxpress.com</p>
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
                            <a href="#" class="w-8 h-8 bg-blue-400 rounded flex items-center justify-center hover:bg-blue-500 transition-colors">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-8 h-8 bg-red-600 rounded flex items-center justify-center hover:bg-red-700 transition-colors">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a2.965 2.965 0 00-2.085-2.098C19.505 3.546 12 3.546 12 3.546s-7.505 0-9.413.542A2.965 2.965 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a2.965 2.965 0 002.085 2.098C4.495 20.454 12 20.454 12 20.454s7.505 0 9.413-.542a2.965 2.965 0 002.085-2.098C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-8 h-8 bg-black rounded flex items-center justify-center hover:bg-gray-800 transition-colors">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.076 10.711v-8.2C12.076 1.121 10.955 0 9.565 0s-2.51 1.12-2.51 2.51V8.2c0 .87-.55 1.64-1.37 1.93l-.95.33c-.81.28-1.37 1.06-1.37 1.93v9.09c0 1.39 1.12 2.51 2.51 2.51h8.21c1.39 0 2.51-1.12 2.51-2.51v-9.09c0-.87-.56-1.65-1.37-1.93l-.95-.33c-.82-.29-1.37-1.06-1.37-1.93z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Certification -->
                <div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.certification') }}</h4>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/100x100/1E40AF/FFFFFF?text=ĐÃ+THÔNG+BÁO" 
                             alt="Certification Badge" class="w-20 h-20 mr-4">
                        <div class="text-sm text-gray-600">
                            <p class="font-medium mb-1">{{ __('messages.business_registration') }}</p>
                            <p>{{ __('messages.registration_details') }}</p>
                        </div>
                    </div>
                </div>
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