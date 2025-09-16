# 🖼️ Hướng dẫn thêm ảnh thật vào background

## 🚨 Vấn đề hiện tại
Background chưa hiển thị ảnh thật vì chúng ta chỉ có CSS gradient mô phỏng. Để có ảnh thật, bạn cần làm theo các bước sau:

## 📋 Cách thêm ảnh thật

### Bước 1: Tải ảnh về
1. Tìm ảnh giao hàng phù hợp (nhân viên giao hàng, khách hàng, gói hàng)
2. Lưu ảnh vào thư mục: `phong_backend/assets/images/`
3. Đặt tên file: `courier-delivery.jpg` (hoặc `.png`, `.webp`)

### Bước 2: Cập nhật CSS
Mở file: `phong_backend/assets/css/amazon-design-system.css`

Tìm dòng này (khoảng dòng 25-43):
```css
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    color: var(--amazon-text-dark);
    background: 
        /* Overlay tối để text dễ đọc */
        linear-gradient(135deg, rgba(35, 47, 62, 0.7), rgba(19, 25, 33, 0.8)),
        /* Gradient mô phỏng ảnh giao hàng - bầu trời */
        linear-gradient(180deg, #87CEEB 0%, #98D8E8 20%, #B0E0E6 40%, #E0F6FF 60%, #F0F8FF 100%),
        /* Gradient mô phỏng đường phố */
        linear-gradient(45deg, #696969 0%, #808080 25%, #A9A9A9 50%, #C0C0C0 75%, #D3D3D3 100%),
        /* Gradient mô phỏng ánh sáng mặt trời */
        radial-gradient(circle at 70% 30%, rgba(255, 255, 255, 0.4) 0%, transparent 60%);
    background-size: 100% 100%, 100% 100%, 100% 100%, 200% 200%;
    background-attachment: fixed;
    min-height: 100vh;
    position: relative;
    animation: deliveryBackgroundAnimation 20s ease-in-out infinite;
}
```

**Thay thế bằng:**
```css
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    color: var(--amazon-text-dark);
    background: 
        /* Overlay tối để text dễ đọc */
        linear-gradient(135deg, rgba(35, 47, 62, 0.7), rgba(19, 25, 33, 0.8)),
        /* Ảnh giao hàng thật */
        url('../images/courier-delivery.jpg') center/cover no-repeat fixed;
    min-height: 100vh;
    position: relative;
}
```

### Bước 3: Xóa animation cũ (tùy chọn)
Nếu muốn giữ animation, giữ lại dòng:
```css
animation: deliveryBackgroundAnimation 20s ease-in-out infinite;
```

Nếu không muốn animation, xóa dòng đó.

### Bước 4: Test
1. Mở file `phong_backend/test-background.html` trong trình duyệt
2. Kiểm tra xem ảnh có hiển thị không
3. Điều chỉnh opacity overlay nếu cần

## 🎨 Tùy chỉnh hiển thị

### Thay đổi độ mờ overlay:
```css
/* Giảm độ mờ để ảnh rõ hơn */
linear-gradient(135deg, rgba(35, 47, 62, 0.5), rgba(19, 25, 33, 0.6))

/* Tăng độ mờ để text dễ đọc hơn */
linear-gradient(135deg, rgba(35, 47, 62, 0.8), rgba(19, 25, 33, 0.9))
```

### Thay đổi vị trí ảnh:
```css
/* Ảnh ở giữa */
url('../images/courier-delivery.jpg') center/cover no-repeat fixed

/* Ảnh ở trên */
url('../images/courier-delivery.jpg') center top/cover no-repeat fixed

/* Ảnh ở dưới */
url('../images/courier-delivery.jpg') center bottom/cover no-repeat fixed
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

Thêm vào cuối file CSS:
```css
@media (max-width: 768px) {
    body {
        background-attachment: scroll; /* Tắt fixed cho mobile */
        background-size: cover;
    }
}
```

## 🔧 Troubleshooting

### Ảnh không hiển thị:
1. ✅ Kiểm tra đường dẫn file: `../images/courier-delivery.jpg`
2. ✅ Kiểm tra tên file có đúng không
3. ✅ Kiểm tra quyền truy cập file
4. ✅ Kiểm tra format ảnh (JPG, PNG, WebP)

### Ảnh hiển thị nhưng mờ:
1. ✅ Giảm opacity overlay
2. ✅ Kiểm tra độ phân giải ảnh
3. ✅ Thay đổi background-size

### Ảnh hiển thị nhưng text khó đọc:
1. ✅ Tăng opacity overlay
2. ✅ Thêm text-shadow cho text
3. ✅ Thay đổi màu text

## 🎯 Ví dụ hoàn chỉnh

```css
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    color: var(--amazon-text-dark);
    background: 
        /* Overlay tối để text dễ đọc */
        linear-gradient(135deg, rgba(35, 47, 62, 0.6), rgba(19, 25, 33, 0.7)),
        /* Ảnh giao hàng thật */
        url('../images/courier-delivery.jpg') center/cover no-repeat fixed;
    min-height: 100vh;
    position: relative;
}

/* Tối ưu cho mobile */
@media (max-width: 768px) {
    body {
        background-attachment: scroll;
        background-size: cover;
    }
}
```

## 📞 Hỗ trợ

Nếu vẫn gặp vấn đề:
1. Kiểm tra console browser (F12)
2. Test với ảnh khác
3. Kiểm tra kích thước file ảnh
4. Thử format ảnh khác (JPG, PNG, WebP)

---

**CourierXpress** - Giao hàng nhanh chóng, an toàn và tin cậy! 🚚✨
