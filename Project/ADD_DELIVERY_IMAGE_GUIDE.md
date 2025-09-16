# 🚚 Hướng dẫn thêm ảnh giao hàng vào CourierXpress Laravel

## 🚨 Vấn đề hiện tại
Trang web Laravel đang sử dụng CSS gradient mô phỏng ảnh giao hàng. Để có ảnh thật, bạn cần làm theo các bước sau:

## 📋 Cách thêm ảnh thật

### Bước 1: Tải ảnh về
1. Tìm ảnh giao hàng phù hợp (nhân viên giao hàng, khách hàng, gói hàng)
2. Lưu ảnh vào thư mục: `Project/public/images/`
3. Đặt tên file: `courier-delivery.jpg` (hoặc `.png`, `.webp`)

### Bước 2: Ảnh sẽ tự động hiển thị
Laravel đã được cấu hình để sử dụng ảnh từ `{{ asset('images/courier-delivery.jpg') }}`

### Bước 3: Test
1. Refresh trang web (F5)
2. Kiểm tra xem ảnh có hiển thị không
3. Điều chỉnh opacity overlay nếu cần

## 🎨 Tùy chỉnh hiển thị

### Thay đổi độ mờ overlay:
Mở file: `Project/resources/views/layouts/app.blade.php`

Tìm dòng:
```css
background: linear-gradient(135deg, rgba(35, 47, 62, 0.7), rgba(19, 25, 33, 0.8))
```

**Giảm độ mờ để ảnh rõ hơn:**
```css
background: linear-gradient(135deg, rgba(35, 47, 62, 0.5), rgba(19, 25, 33, 0.6))
```

**Tăng độ mờ để text dễ đọc hơn:**
```css
background: linear-gradient(135deg, rgba(35, 47, 62, 0.8), rgba(19, 25, 33, 0.9))
```

### Thay đổi vị trí ảnh:
```css
/* Ảnh ở giữa */
url('{{ asset('images/courier-delivery.jpg') }}') center/cover no-repeat fixed

/* Ảnh ở trên */
url('{{ asset('images/courier-delivery.jpg') }}') center top/cover no-repeat fixed

/* Ảnh ở dưới */
url('{{ asset('images/courier-delivery.jpg') }}') center bottom/cover no-repeat fixed
```

### Thay đổi kích thước ảnh:
```css
/* Cover - phủ toàn bộ */
center/cover no-repeat fixed

/* Contain - giữ tỷ lệ */
center/contain no-repeat fixed

/* Auto - kích thước gốc */
center/auto no-repeat fixed
```

## 📱 Tối ưu cho mobile

CSS đã được thêm vào layout:
```css
@media (max-width: 768px) {
    body {
        background-attachment: scroll !important;
    }
}
```

## 🔧 Troubleshooting

### Ảnh không hiển thị:
1. ✅ Kiểm tra đường dẫn file: `Project/public/images/courier-delivery.jpg`
2. ✅ Kiểm tra tên file có đúng không
3. ✅ Kiểm tra quyền truy cập file
4. ✅ Kiểm tra format ảnh (JPG, PNG, WebP)
5. ✅ Clear cache Laravel: `php artisan cache:clear`

### Ảnh hiển thị nhưng mờ:
1. ✅ Giảm opacity overlay
2. ✅ Kiểm tra độ phân giải ảnh
3. ✅ Thay đổi background-size

### Ảnh hiển thị nhưng text khó đọc:
1. ✅ Tăng opacity overlay
2. ✅ Thêm text-shadow cho text
3. ✅ Thay đổi màu text

## 🎯 Ví dụ hoàn chỉnh

File: `Project/resources/views/layouts/app.blade.php`

```html
<body class="bg-gray-50" style="background: linear-gradient(135deg, rgba(35, 47, 62, 0.6), rgba(19, 25, 33, 0.7)), url('{{ asset('images/courier-delivery.jpg') }}') center/cover no-repeat fixed; min-height: 100vh; position: relative;">
```

## 🎨 Background hiện tại có gì:

### ✨ **CSS Gradient mô phỏng** (hiện tại):
- 🌅 Bầu trời xanh (sky blue gradient)
- 🛣️ Đường phố xám (street gray gradient) 
- ☀️ Ánh sáng mặt trời (radial gradient)
- 🚚 Element mô phỏng nhân viên giao hàng (hình tròn cam)
- 👤 Element mô phỏng khách hàng (hình tròn trắng)
- 📦 Element mô phỏng gói hàng (hình vuông nâu)
- 🎭 Animation 15 giây với floating effects

### 🖼️ **Ảnh thật** (khi thêm file):
- Ảnh giao hàng thật với overlay gradient
- Hiệu ứng parallax với background-attachment: fixed
- Responsive design cho mobile

## 📞 Hỗ trợ

Nếu vẫn gặp vấn đề:
1. Kiểm tra console browser (F12)
2. Test với ảnh khác
3. Kiểm tra kích thước file ảnh
4. Thử format ảnh khác (JPG, PNG, WebP)
5. Clear cache Laravel

## 🚀 Quick Start

1. **Tải ảnh giao hàng** về `Project/public/images/courier-delivery.jpg`
2. **Refresh trang web** (F5)
3. **Xem kết quả** ngay lập tức!

---

**CourierXpress** - Giao hàng nhanh chóng, an toàn và tin cậy! 🚚✨
