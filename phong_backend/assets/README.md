# 🚚 CourierXpress - Background System

## 📁 Cấu trúc thư mục

```
phong_backend/assets/
├── css/
│   ├── amazon-design-system.css    # CSS chính với background images
│   ├── utils.css                   # Utility classes
│   └── styles.css                  # Styles bổ sung
├── images/
│   └── background-generator.html   # Tool tạo background
└── README.md                       # File này
```

## 🎨 Background Images

Hệ thống sử dụng **CSS gradients** thay vì ảnh thật để tạo background đẹp mắt:

### 1. Main Background (`courier-background.jpg`)
- **Vị trí**: Body của trang web
- **Hiệu ứng**: Gradient động với animation
- **Màu sắc**: Amazon Orange + Blue theme

### 2. Hero Background (`hero-background.jpg`)
- **Vị trí**: Section hero
- **Hiệu ứng**: Radial gradients với overlay
- **Màu sắc**: Light theme với accent colors

### 3. Auth Background (`auth-background.jpg`)
- **Vị trí**: Trang login/register
- **Hiệu ứng**: Dark theme với radial overlays
- **Màu sắc**: Dark blue với orange accents

## 🚀 Cách sử dụng

### 1. Sử dụng CSS có sẵn
```html
<link rel="stylesheet" href="assets/css/amazon-design-system.css">
<link rel="stylesheet" href="assets/css/utils.css">
<link rel="stylesheet" href="assets/css/styles.css">
```

### 2. Thay thế bằng ảnh thật
Nếu muốn sử dụng ảnh thật, thay đổi trong CSS:

```css
body {
    background: linear-gradient(135deg, rgba(35, 47, 62, 0.9), rgba(19, 25, 33, 0.9)), 
                url('../images/your-image.jpg') center/cover no-repeat fixed;
}
```

### 3. Tùy chỉnh màu sắc
Thay đổi CSS variables trong `amazon-design-system.css`:

```css
:root {
    --amazon-orange: #ff9900;    /* Màu cam chính */
    --amazon-blue: #232f3e;      /* Màu xanh chính */
    --amazon-dark-blue: #131921; /* Màu xanh đậm */
}
```

## 🎯 Tính năng

### ✨ Hiệu ứng đặc biệt
- **Gradient Animation**: Background có hiệu ứng chuyển động
- **Backdrop Blur**: Hiệu ứng mờ phía sau
- **Hover Effects**: Hiệu ứng khi hover
- **Responsive**: Tương thích mọi thiết bị

### 🎨 Components
- **Header**: Gradient header với navigation
- **Cards**: Cards với shadow và hover effects
- **Buttons**: Buttons với gradient và animation
- **Forms**: Form inputs với focus effects

### 📱 Responsive Design
- **Mobile First**: Thiết kế ưu tiên mobile
- **Breakpoints**: 768px, 1024px, 1200px
- **Flexible Grid**: Grid system linh hoạt

## 🔧 Tùy chỉnh

### Thêm background mới
1. Tạo CSS class mới trong `styles.css`
2. Sử dụng gradient hoặc ảnh
3. Thêm vào HTML element

### Thay đổi animation
```css
@keyframes yourAnimation {
    0% { /* trạng thái đầu */ }
    100% { /* trạng thái cuối */ }
}
```

### Thêm hiệu ứng hover
```css
.your-element:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}
```

## 📋 Demo

Mở file `demo-background.html` để xem demo hoàn chỉnh:
- Background effects
- Component styling
- Interactive elements
- Responsive design

## 🎨 Màu sắc chính

| Màu | Hex Code | Sử dụng |
|-----|----------|---------|
| Amazon Orange | `#ff9900` | Primary buttons, accents |
| Amazon Blue | `#232f3e` | Headers, text |
| Amazon Dark Blue | `#131921` | Dark backgrounds |
| Light Gray | `#f3f3f3` | Light backgrounds |
| Success | `#007600` | Success states |
| Warning | `#ff8c00` | Warning states |
| Error | `#b12704` | Error states |

## 🚀 Performance

- **CSS-only**: Không cần JavaScript cho background
- **Hardware Acceleration**: Sử dụng transform và opacity
- **Optimized**: Gradients được tối ưu cho performance
- **Lightweight**: File CSS nhỏ gọn

## 📞 Hỗ trợ

Nếu cần hỗ trợ hoặc có câu hỏi:
1. Kiểm tra file `background-generator.html` để xem examples
2. Xem file `demo-background.html` để test
3. Đọc comments trong CSS files

---

**CourierXpress** - Giao hàng nhanh chóng, an toàn và tin cậy! 🚚✨

