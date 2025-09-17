<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'CourierXpress')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url("{{ asset('images/2.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        /* Thêm một lớp phủ mờ để nội dung dễ đọc hơn */
        .content-wrapper {
            background-color: rgba(243, 244, 246, 0.3); /* bg-gray-100 with opacity */
        }
    </style>
    @yield('head')
</head>
<body class="font-sans antialiased">
    <div id="app" class="min-h-screen content-wrapper">
        <!-- Header -->
        <header class="bg-white/80 backdrop-blur-md shadow-md sticky top-0 z-40">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="/" class="flex items-center space-x-3">
                            <img src="{{ asset('images/bao.png') }}" alt="Logo" class="h-8 w-8 mr-2">
                            <span class="text-2xl font-bold cyberpunk-title">CourierXpress</span>
                        </a>
                        @if(isset($role_title))
                            <span class="ml-4 text-red-600 font-medium">{{ $role_title }}</span>
                        @endif
                    </div>

                    <!-- Navigation - Dynamic based on role -->
                    <nav class="hidden md:flex items-center space-x-8">
                        @yield('navigation')
                    </nav>

                    <!-- User Info & Actions -->
                    <div class="flex items-center space-x-4">
                        <!-- Notification Button (optional - can be yielded) -->
                        @hasSection('header_actions')
                            @yield('header_actions')
                        @endif
                        
                        <span class="text-gray-700" id="userName">{{ auth()->check() ? auth()->user()->name : 'User' }}</span>
                        
                        <!-- JavaScript Logout Button -->
                        <button onclick="logout()" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                            <i class="fas fa-sign-out-alt mr-2"></i>Đăng xuất
                        </button>
                        
                        <!-- Alternative: Direct Form Logout (for testing) -->
                        <!-- 
                        <form method="POST" action="/eprojectv2/CourierXpress/Project/public/logout" style="display: inline;">
                            @csrf
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                                <i class="fas fa-sign-out-alt mr-2"></i>Đăng xuất (Test)
                            </button>
                        </form>
                        -->
                    </div>
                </div>
            </div>
        </header>

        <!-- Sub Navigation (optional) -->
        @hasSection('sub_navigation')
        <nav class="bg-white shadow-sm border-b">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex space-x-8">
                    @yield('sub_navigation')
                </div>
            </div>
        </nav>
        @endif

        <!-- Main Content -->
        <main class="@yield('container_class', 'max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8')">
            @yield('content')
        </main>

        <!-- Footer -->
        @include('components.footer')

        <!-- Authentication data for JavaScript -->
        @if(auth()->check())
        <div id="auth-data" 
             data-user-id="{{ auth()->user()->id }}" 
             data-user-name="{{ auth()->user()->name }}" 
             data-user-email="{{ auth()->user()->email }}" 
             data-user-role="{{ auth()->user()->role }}" 
             data-user-status="{{ auth()->user()->status ?? 'active' }}"
             style="display: none;">
        </div>
        @endif

        <!-- Common Scripts -->
        <script>
            // Laravel session authentication check and localStorage sync
            document.addEventListener('DOMContentLoaded', function() {
                const authDataElement = document.getElementById('auth-data');
                
                if (authDataElement) {
                    // Store Laravel session data in localStorage for compatibility
                    const userData = {
                        id: authDataElement.getAttribute('data-user-id'),
                        name: authDataElement.getAttribute('data-user-name'),
                        email: authDataElement.getAttribute('data-user-email'),
                        role: authDataElement.getAttribute('data-user-role'),
                        status: authDataElement.getAttribute('data-user-status')
                    };
                    
                    window.userData = userData;
                    localStorage.setItem('user_data', JSON.stringify(userData));
                    localStorage.setItem('auth_token', 'laravel_session_' + userData.id);
                    
                    // Update user name in header
                    const userNameEl = document.getElementById('userName');
                    if (userNameEl) {
                        userNameEl.textContent = userData.name;
                    }
                } else {
                    // Clear localStorage if not authenticated
                    localStorage.removeItem('user_data');
                    localStorage.removeItem('auth_token');
                    // window.location.href = '/login'; // Commented out to avoid automatic redirect during development
                }
            });

            // Common functions
            function logout() {
                if (confirm('Bạn có chắc muốn đăng xuất?')) {
                    // Show loading indicator
                    const button = event.target;
                    const originalText = button.innerHTML;
                    button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Đang đăng xuất...';
                    button.disabled = true;
                    
                    // Clear localStorage
                    localStorage.removeItem('auth_token');
                    localStorage.removeItem('user_data');
                    
                    // Use Laravel logout
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/logout';
                    const csrfToken = document.createElement('input');
                    csrfToken.type = 'hidden';
                    csrfToken.name = '_token';
                    csrfToken.value = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    form.appendChild(csrfToken);
                    document.body.appendChild(form);
                    form.submit();
                }
            }

            // Check authentication - now works with Laravel session
            function checkAuth(requiredRole = null) {
                const authDataElement = document.getElementById('auth-data');
                
                if (authDataElement) {
                    const userRole = authDataElement.getAttribute('data-user-role');
                    
                    if (requiredRole && userRole !== requiredRole) {
                        // Redirect to appropriate dashboard based on actual role
                        switch(userRole) {
                            case 'admin':
                                window.location.href = '/admin/dashboard';
                                break;
                            case 'agent':
                                window.location.href = '/agent/dashboard';
                                break;
                            case 'shipper':
                                window.location.href = '/shipper/dashboard';
                                break;
                            case 'user':
                                window.location.href = '/user/dashboard';
                                break;
                            default:
                                window.location.href = '/login';
                        }
                    }
                } else {
                    // Not authenticated via Laravel session
                    window.location.href = '/login';
                }
            }

            // Format currency
            function formatCurrency(amount) {
                return new Intl.NumberFormat('vi-VN', { 
                    style: 'currency', 
                    currency: 'VND' 
                }).format(amount);
            }

            // Format date
            function formatDate(dateString) {
                return new Date(dateString).toLocaleDateString('vi-VN', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                });
            }
        </script>

        @yield('scripts')
    </div>
</body>
</html>