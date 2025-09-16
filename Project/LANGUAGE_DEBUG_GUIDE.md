# 🔧 CourierXpress - Hướng dẫn Debug Chức năng Chuyển đổi Ngôn ngữ

## 🚨 Vấn đề: Login page không chuyển sang tiếng Anh

### ✅ **Đã sửa:**

1. **🎨 Cải thiện nút chuyển đổi ngôn ngữ:**
   - Tăng kích thước nút (từ `text-xs` thành `text-sm`)
   - Thêm border rõ ràng hơn
   - Cải thiện hover effects

2. **🔧 Thêm trang test debug:**
   - `http://localhost:8000/language-test` - Trang test đầy đủ
   - `http://localhost:8000/test-language` - API test JSON

## 🚀 Cách test và debug

### **Bước 1: Test trang debug**
```
http://localhost:8000/language-test
```

### **Bước 2: Kiểm tra API**
```
http://localhost:8000/test-language
```

### **Bước 3: Test trang login**
```
http://localhost:8000/login
```

## 🔍 Debug Steps

### **1. Kiểm tra nút chuyển đổi có hiển thị không:**
- Mở trang login: `http://localhost:8000/login`
- Tìm 2 nút: 🇻🇳 Tiếng Việt và 🇺🇸 English
- Nếu không thấy, có thể CSS bị ẩn

### **2. Kiểm tra session:**
- Mở trang test: `http://localhost:8000/language-test`
- Xem "Current Status" section
- Kiểm tra Session Locale và App Locale

### **3. Kiểm tra API:**
- Mở: `http://localhost:8000/test-language`
- Xem JSON response
- Kiểm tra `current_locale` và `app_locale`

### **4. Test chuyển đổi:**
- Click nút 🇺🇸 English
- Refresh trang
- Kiểm tra text có thay đổi không

## 🛠️ Troubleshooting

### **Vấn đề 1: Nút không hiển thị**
**Nguyên nhân:** CSS bị ẩn hoặc Tailwind không load
**Giải pháp:**
```bash
# Clear cache
php artisan cache:clear
php artisan view:clear
php artisan config:clear
```

### **Vấn đề 2: Click nút không chuyển ngôn ngữ**
**Nguyên nhân:** Route không hoạt động
**Giải pháp:**
```bash
# Kiểm tra route
php artisan route:list | grep language
```

### **Vấn đề 3: Session không lưu**
**Nguyên nhân:** Session driver không hoạt động
**Giải pháp:**
```php
// Kiểm tra config/session.php
'driver' => env('SESSION_DRIVER', 'file'),
```

### **Vấn đề 4: Translation không thay đổi**
**Nguyên nhân:** File language không tồn tại
**Giải pháp:**
```bash
# Kiểm tra file
ls -la Project/lang/vi/auth.php
ls -la Project/lang/en/auth.php
```

## 📋 Files cần kiểm tra

### **1. Language Files:**
- ✅ `Project/lang/vi/auth.php` - Tiếng Việt
- ✅ `Project/lang/en/auth.php` - English

### **2. Controllers:**
- ✅ `Project/app/Http/Controllers/LanguageController.php`
- ✅ `Project/app/Http/Middleware/SetLocale.php`

### **3. Views:**
- ✅ `Project/resources/views/auth/login.blade.php`
- ✅ `Project/resources/views/auth/register.blade.php`

### **4. Routes:**
- ✅ `Project/routes/web.php` - Route language.change

## 🎯 Test Cases

### **Test 1: Nút chuyển đổi hiển thị**
- [ ] Mở trang login
- [ ] Thấy 2 nút: 🇻🇳 Tiếng Việt và 🇺🇸 English
- [ ] Nút có border và hover effect

### **Test 2: Chuyển đổi ngôn ngữ**
- [ ] Click nút 🇺🇸 English
- [ ] Trang refresh
- [ ] Text chuyển sang tiếng Anh
- [ ] Nút English có màu cam (active)

### **Test 3: Session lưu trữ**
- [ ] Chuyển sang English
- [ ] Refresh trang
- [ ] Vẫn giữ English
- [ ] Mở tab mới, vẫn English

### **Test 4: Validation messages**
- [ ] Chuyển sang English
- [ ] Submit form trống
- [ ] Error messages hiển thị tiếng Anh

## 🔧 Quick Fixes

### **Fix 1: Force refresh browser**
```
Ctrl + Shift + R (Windows)
Cmd + Shift + R (Mac)
```

### **Fix 2: Clear Laravel cache**
```bash
php artisan cache:clear
php artisan view:clear
php artisan config:clear
php artisan route:clear
```

### **Fix 3: Check session storage**
```bash
# Kiểm tra thư mục storage
ls -la storage/framework/sessions/
```

### **Fix 4: Test với incognito mode**
- Mở trình duyệt incognito
- Truy cập trang login
- Test chuyển đổi ngôn ngữ

## 📞 Debug Commands

### **Laravel Commands:**
```bash
# Clear all cache
php artisan optimize:clear

# Check routes
php artisan route:list | grep language

# Check config
php artisan config:show session
```

### **Browser Console:**
```javascript
// Check if buttons exist
document.querySelectorAll('a[href*="language.change"]')

// Check current URL
window.location.href

// Check session storage
localStorage.getItem('laravel_session')
```

## 🎯 Expected Results

### **Khi chuyển sang English:**
- Title: "Sign in to your account"
- Email: "Email"
- Password: "Password"
- Button: "Sign In"
- Link: "Don't have an account? Sign up now"

### **Khi chuyển sang Tiếng Việt:**
- Title: "Đăng nhập vào tài khoản của bạn"
- Email: "Email"
- Password: "Mật khẩu"
- Button: "Đăng nhập"
- Link: "Chưa có tài khoản? Đăng ký ngay"

---

**CourierXpress** - Debug và sửa lỗi chuyển đổi ngôn ngữ! 🔧🌐
