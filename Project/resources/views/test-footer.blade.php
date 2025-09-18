<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Footer - Font Weight</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .font-test {
            font-weight: 300 !important;
            color: #374151;
            font-size: 16px;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto py-12">
        <h1 class="text-3xl font-bold text-center mb-8">Test Font Weight trong Footer</h1>
        
        <div class="bg-white p-8 rounded-lg shadow-lg mb-8">
            <h2 class="text-xl font-bold mb-4">Thử nghiệm các cách thay đổi font weight:</h2>
            
            <div class="space-y-4">
                <div>
                    <p class="text-sm text-gray-600">1. Inline style (font-weight: 300):</p>
                    <h3 style="font-size: 16px; font-weight: 300; color: #374151;">Dịch vụ giao hàng</h3>
                </div>
                
                <div>
                    <p class="text-sm text-gray-600">2. CSS class (.font-test):</p>
                    <h3 class="font-test">Công ty vận chuyển</h3>
                </div>
                
                <div>
                    <p class="text-sm text-gray-600">3. Tailwind font-light:</p>
                    <h3 class="text-base font-light text-gray-700">Hỗ trợ khách hàng</h3>
                </div>
                
                <div>
                    <p class="text-sm text-gray-600">4. Tailwind font-thin:</p>
                    <h3 class="text-base font-thin text-gray-700">Thông tin liên hệ</h3>
                </div>
                
                <div>
                    <p class="text-sm text-gray-600">5. Tailwind font-normal:</p>
                    <h3 class="text-base font-normal text-gray-700">Chính sách và điều khoản</h3>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
</body>
</html>