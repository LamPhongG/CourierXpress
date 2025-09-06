# 🚚 CourierXpress - Hệ thống quản lý vận chuyển

## 📖 Giới thiệu
CourierXpress là một hệ thống quản lý vận chuyển toàn diện được xây dựng bằng Laravel, cung cấp các tính năng quản lý đơn hàng, shipper, agent và khách hàng.

## 🛠️ Công nghệ sử dụng
- **Backend:** Laravel 11.x
- **Database:** MySQL 8.0
- **Frontend:** Blade Templates + TailwindCSS
- **JavaScript:** Vanilla JS + jQuery + DataTables
- **Icons:** Font Awesome 6.0

## 📋 Yêu cầu hệ thống
- PHP >= 8.2
- Composer
- MySQL >= 8.0
- Node.js (optional, for asset compilation)

## 🚀 Cài đặt

### 1. Clone repository
```bash
git clone https://github.com/LamPhongG/CourierXpress.git
cd CourierXpress
```

### 2. Cài đặt dependencies
```bash
cd Project
composer install
```

### 3. Cấu hình môi trường
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Cấu hình database trong .env
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=courierxpress
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Chạy migration và seeding
```bash
php artisan migrate:fresh --force
php artisan db:seed
```

### 6. Khởi động server
```bash
php artisan serve
```

## 👥 Tài khoản mặc định

| Vai trò | Email | Mật khẩu |
|---------|-------|----------|
| Admin | admin@courierxpress.com | 123456 |
| Agent | agent@courierxpress.com | 123456 |
| Shipper | shipper@courierxpress.com | 123456 |
| Customer | customer@courierxpress.com | 123456 |

## 🎯 Tính năng chính

### 👨‍💼 Admin Dashboard
- ✅ Quản lý tổng quan hệ thống
- ✅ Quản lý agents
- ✅ Quản lý shippers
- ✅ Quản lý đơn hàng
- ✅ Báo cáo và thống kê
- ✅ Cài đặt hệ thống

### 🏢 Agent Dashboard
- ✅ Quản lý đơn hàng khu vực
- ✅ Phân công shipper
- ✅ Theo dõi tiến độ giao hàng
- ✅ Báo cáo khu vực

### 🚴 Shipper Dashboard
- ✅ Nhận và quản lý đơn hàng
- ✅ Cập nhật trạng thái giao hàng
- ✅ Theo dõi lịch sử giao hàng
- ✅ Đánh giá và phản hồi

### 👨‍💼 Customer Dashboard
- ✅ Tạo đơn hàng mới
- ✅ Theo dõi đơn hàng
- ✅ Lịch sử giao dịch
- ✅ Đánh giá dịch vụ

## 📁 Cấu trúc thư mục
```
CourierXpress/
├── Project/                    # Laravel application
│   ├── app/
│   │   ├── Http/Controllers/
│   │   │   ├── Admin/         # Admin controllers
│   │   │   ├── Agent/         # Agent controllers
│   │   │   ├── Shipper/       # Shipper controllers
│   │   │   └── User/          # User controllers
│   │   └── Models/            # Eloquent models
│   ├── database/
│   │   ├── migrations/        # Database migrations
│   │   └── seeders/           # Database seeders
│   ├── resources/views/       # Blade templates
│   │   ├── admin/            # Admin views
│   │   ├── agent/            # Agent views
│   │   ├── shipper/          # Shipper views
│   │   └── user/             # User views
│   └── routes/               # Route definitions
└── README.md
```

## 🔧 API Endpoints

### Admin API
- `GET /api/admin/agents` - Danh sách agents
- `POST /api/admin/agents` - Tạo agent mới
- `PUT /api/admin/agents/{id}` - Cập nhật agent
- `DELETE /api/admin/agents/{id}` - Xóa agent

### Development API (for testing)
- `GET /dev/test-agents-api` - Test agents data
- `GET /dev/test-shippers-api` - Test shippers data

## 🐛 Troubleshooting

### DataTables Issues
Nếu gặp lỗi DataTables "unknown parameter", kiểm tra:
1. API endpoint có hoạt động không
2. Cấu trúc dữ liệu JSON có đúng không
3. Các trường bắt buộc có đầy đủ không

### Database Issues
Nếu gặp lỗi database:
```bash
php artisan migrate:fresh --force
php artisan db:seed
```

## 🤝 Đóng góp
1. Fork repository
2. Tạo feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Tạo Pull Request

## 📝 License
Dự án này được phân phối dưới MIT License.

## 📞 Liên hệ
- **Email:** lamphoang.dev@gmail.com
- **GitHub:** [LamPhongG](https://github.com/LamPhongG)

---

⭐ **Nếu dự án hữu ích, hãy cho chúng tôi một star!** ⭐