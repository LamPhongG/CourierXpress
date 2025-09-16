# 🚚 CourierXpress - Hướng dẫn sử dụng ảnh giao hàng làm background

## 📸 Mô tả ảnh giao hàng

**Ảnh giao hàng CourierXpress:**
- Nhân viên giao hàng mặc đồng phục màu cam đặc trưng
- Đang trao gói hàng cho khách hàng nữ trên đường phố
- Cảnh tươi sáng, chuyên nghiệp với ánh sáng mặt trời
- Logo "Your Delivery, Our Priority" ở góc dưới
- Không khí thân thiện và hiệu quả

## 🎨 Cách thêm ảnh thật

### Bước 1: Tải ảnh về
```bash
# Lưu ảnh vào thư mục
phong_backend/assets/images/courier-delivery.jpg
```

### Bước 2: Cập nhật CSS
File: `phong_backend/assets/css/amazon-design-system.css`

```css
body {
    background: linear-gradient(135deg, rgba(35, 47, 62, 0.8), rgba(19, 25, 33, 0.9)), 
                url('../images/courier-delivery.jpg') center/cover no-repeat fixed;
}
```

### Bước 3: Tối ưu cho mobile
```css
@media (max-width: 768px) {
    body {
        background-attachment: scroll;
        background-size: cover;
    }
}
```

## ✨ Hiệu ứng đặc biệt đã tích hợp

### 1. **Gradient Animation**
- Mô phỏng ánh sáng mặt trời từ ảnh
- Hiệu ứng brightness thay đổi theo thời gian
- Animation 15 giây lặp lại

### 2. **Floating Icons**
- Icon 🚚 và 📦 floating trong hero section
- Animation float 3 giây
- Ẩn trên mobile để tránh rối mắt

### 3. **Backdrop Blur**
- Hiệu ứng mờ phía sau cho cards
- Tăng độ tương phản cho text
- Fallback cho trình duyệt cũ

### 4. **Responsive Design**
- Tối ưu cho mọi thiết bị
- Background-attachment: scroll trên mobile
- Hardware acceleration cho performance

## 🚀 Demo và Test

### File demo:
- `phong_backend/demo-delivery-background.html` - Demo hoàn chỉnh
- `phong_backend/assets/images/courier-delivery-background.html` - Tool tạo background

### Cách test:
1. Mở `demo-delivery-background.html` trong trình duyệt
2. Kiểm tra hiệu ứng trên desktop và mobile
3. Test performance với DevTools

## 🎯 Tùy chỉnh nâng cao

### Thay đổi overlay opacity:
```css
body {
    background: linear-gradient(135deg, 
        rgba(35, 47, 62, 0.8), /* Thay đổi số này (0.0-1.0) */
        rgba(19, 25, 33, 0.9)), 
        url('../images/courier-delivery.jpg') center/cover no-repeat fixed;
}
```

### Thay đổi animation speed:
```css
.hero {
    animation: deliveryAnimation 15s ease-in-out infinite; /* Thay đổi 15s */
}
```

### Thay đổi floating icons:
```css
.hero::before {
    content: '🚚'; /* Thay đổi icon */
    font-size: 60px; /* Thay đổi kích thước */
    top: 20%; /* Thay đổi vị trí */
    left: 10%;
}
```

## 📱 Tối ưu Performance

### 1. **Hardware Acceleration**
```css
.hero {
    will-change: background-position;
    transform: translateZ(0);
}
```

### 2. **Fallback cho trình duyệt cũ**
```css
@supports not (background-attachment: fixed) {
    body {
        background-attachment: scroll;
    }
}
```

### 3. **Lazy Loading** (nếu cần)
```html
<img src="courier-delivery.jpg" loading="lazy" alt="Delivery">
```

## 🎨 Màu sắc chính

| Màu | Hex Code | Sử dụng |
|-----|----------|---------|
| Amazon Orange | `#ff9900` | Đồng phục nhân viên |
| Amazon Blue | `#232f3e` | Text và accents |
| Amazon Dark Blue | `#131921` | Overlay tối |
| Sky Blue | `#87CEEB` | Bầu trời mô phỏng |
| Street Gray | `#696969` | Đường phố mô phỏng |

## 🔧 Troubleshooting

### Ảnh không hiển thị:
1. Kiểm tra đường dẫn file
2. Kiểm tra quyền truy cập file
3. Kiểm tra format ảnh (JPG, PNG, WebP)

### Animation lag:
1. Giảm animation duration
2. Sử dụng `transform` thay vì `position`
3. Kiểm tra hardware acceleration

### Mobile không hiển thị tốt:
1. Kiểm tra `background-attachment: scroll`
2. Giảm opacity overlay
3. Ẩn floating icons

## 📞 Hỗ trợ

Nếu cần hỗ trợ:
1. Kiểm tra file demo
2. Xem console errors
3. Test trên nhiều trình duyệt
4. Kiểm tra responsive design

---

**CourierXpress** - Giao hàng nhanh chóng, an toàn và tin cậy! 🚚✨
