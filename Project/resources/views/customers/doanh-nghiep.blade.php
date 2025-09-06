@extends('layouts.app')

@section('content')
<div class="pt-20 min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-orange-600 to-orange-700 text-white py-20">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-6">{{ __('messages.business_customer_title') }}</h1>
                <p class="text-xl mb-8 max-w-3xl mx-auto">{{ __('messages.business_customer_subtitle') }}</p>
                <button class="bg-white text-orange-600 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300">
                    {{ __('messages.contact_now') }}
                </button>
            </div>
        </div>
    </div>

    <!-- Business Solutions -->
    <div class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-800">Giải pháp cho doanh nghiệp</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-gray-800">E-commerce Logistics</h3>
                    <p class="text-gray-600 text-center mb-6">Quản lý toàn bộ chuỗi cung ứng cho thương mại điện tử</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-6">
                        <li>• Warehousing & Fulfillment</li>
                        <li>• Last-mile delivery</li>
                        <li>• Returns management</li>
                        <li>• Multi-channel integration</li>
                    </ul>
                    <button class="w-full bg-orange-600 text-white font-bold py-2 rounded-lg hover:bg-orange-700 transition duration-300">
                        Tìm hiểu thêm
                    </button>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-gray-800">Supply Chain Management</h3>
                    <p class="text-gray-600 text-center mb-6">Quản lý chuỗi cung ứng thông minh và hiệu quả</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-6">
                        <li>• Demand planning</li>
                        <li>• Vendor management</li>
                        <li>• Inventory optimization</li>
                        <li>• Analytics & reporting</li>
                    </ul>
                    <button class="w-full bg-orange-600 text-white font-bold py-2 rounded-lg hover:bg-orange-700 transition duration-300">
                        Tìm hiểu thêm
                    </button>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-gray-800">B2B Distribution</h3>
                    <p class="text-gray-600 text-center mb-6">Phân phối sản phẩm B2B chuyên nghiệp</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-6">
                        <li>• Route optimization</li>
                        <li>• Bulk delivery</li>
                        <li>• Scheduled delivery</li>
                        <li>• Document management</li>
                    </ul>
                    <button class="w-full bg-orange-600 text-white font-bold py-2 rounded-lg hover:bg-orange-700 transition duration-300">
                        Tìm hiểu thêm
                    </button>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-gray-800">Cold Chain Logistics</h3>
                    <p class="text-gray-600 text-center mb-6">Vận chuyển hàng hóa đặc biệt cần bảo quản lạnh</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-6">
                        <li>• Temperature control</li>
                        <li>• Real-time monitoring</li>
                        <li>• Compliance management</li>
                        <li>• Quality assurance</li>
                    </ul>
                    <button class="w-full bg-orange-600 text-white font-bold py-2 rounded-lg hover:bg-orange-700 transition duration-300">
                        Tìm hiểu thêm
                    </button>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-gray-800">Cross-border Logistics</h3>
                    <p class="text-gray-600 text-center mb-6">Vận chuyển quốc tế và thủ tục hải quan</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-6">
                        <li>• Customs clearance</li>
                        <li>• International shipping</li>
                        <li>• Documentation</li>
                        <li>• Compliance support</li>
                    </ul>
                    <button class="w-full bg-orange-600 text-white font-bold py-2 rounded-lg hover:bg-orange-700 transition duration-300">
                        Tìm hiểu thêm
                    </button>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-gray-800">Technology Integration</h3>
                    <p class="text-gray-600 text-center mb-6">Tích hợp API và hệ thống quản lý</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-6">
                        <li>• API integration</li>
                        <li>• ERP connectivity</li>
                        <li>• Custom dashboards</li>
                        <li>• Real-time tracking</li>
                    </ul>
                    <button class="w-full bg-orange-600 text-white font-bold py-2 rounded-lg hover:bg-orange-700 transition duration-300">
                        Tìm hiểu thêm
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Industry Focus -->
    <div class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-800">Chuyên biệt theo ngành</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-gray-800">Bán lẻ</h3>
                    <p class="text-sm text-gray-600">Fashion, Electronics, FMCG</p>
                </div>

                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-gray-800">Dược phẩm</h3>
                    <p class="text-sm text-gray-600">Medicine, Healthcare</p>
                </div>

                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-9 0V3a1 1 0 011-1h6a1 1 0 011 1v1M7 4h10l1 16H6L7 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-gray-800">Thực phẩm</h3>
                    <p class="text-sm text-gray-600">F&B, Fresh produce</p>
                </div>

                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-gray-800">Sản xuất</h3>
                    <p class="text-sm text-gray-600">Manufacturing, Industrial</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Stories -->
    <div class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-800">Câu chuyện thành công</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="mb-6">
                        <img src="https://via.placeholder.com/100x50/4F46E5/FFFFFF?text=ABC+Corp" alt="ABC Corp" class="h-12 mx-auto">
                    </div>
                    <blockquote class="text-gray-600 italic mb-6">
                        "CourierXpress đã giúp chúng tôi giảm 40% chi phí logistics và cải thiện thời gian giao hàng đáng kể."
                    </blockquote>
                    <div class="text-center">
                        <p class="font-bold text-gray-800">Nguyễn Văn A</p>
                        <p class="text-sm text-gray-600">CEO, ABC Corp</p>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="mb-6">
                        <img src="https://via.placeholder.com/100x50/4F46E5/FFFFFF?text=XYZ+Ltd" alt="XYZ Ltd" class="h-12 mx-auto">
                    </div>
                    <blockquote class="text-gray-600 italic mb-6">
                        "Hệ thống tracking real-time và báo cáo chi tiết giúp chúng tôi quản lý hiệu quả hơn."
                    </blockquote>
                    <div class="text-center">
                        <p class="font-bold text-gray-800">Trần Thị B</p>
                        <p class="text-sm text-gray-600">Operations Manager, XYZ Ltd</p>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="mb-6">
                        <img src="https://via.placeholder.com/100x50/4F46E5/FFFFFF?text=DEF+Co" alt="DEF Co" class="h-12 mx-auto">
                    </div>
                    <blockquote class="text-gray-600 italic mb-6">
                        "Dịch vụ chuyên nghiệp, đội ngũ support tận tâm. Chúng tôi rất hài lòng với CourierXpress."
                    </blockquote>
                    <div class="text-center">
                        <p class="font-bold text-gray-800">Lê Văn C</p>
                        <p class="text-sm text-gray-600">Logistics Director, DEF Co</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-orange-600 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6">Sẵn sàng tối ưu logistics cho doanh nghiệp?</h2>
            <p class="text-xl mb-8">Liên hệ ngay để được tư vấn giải pháp phù hợp và nhận ưu đãi đặc biệt</p>
            <div class="space-x-4">
                <button class="bg-white text-orange-600 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300">
                    Đặt lịch tư vấn
                </button>
                <button class="border-2 border-white text-white font-bold py-3 px-8 rounded-lg hover:bg-white hover:text-orange-600 transition duration-300">
                    Tải brochure
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
