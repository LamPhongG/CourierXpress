# Hướng dẫn phát triển Backend (Phong)

## Mục tiêu
Phát triển toàn bộ phần Backend sử dụng PHP/Laravel, bao gồm thiết kế cơ sở dữ liệu, xây dựng API RESTful cho các luồng Public, Admin và Agent, và cung cấp các endpoint cho Frontend.

## Các bước thực hiện

### 1. Thiết kế Cơ sở dữ liệu (CSDL)
*   **Phân tích yêu cầu:** Dựa vào file `CourierXpress.pdf` và các yêu cầu mới để xác định các thực thể (người dùng, đơn hàng, agent, admin, shipper, khách hàng, v.v.) và mối quan hệ giữa chúng.
*   **Lựa chọn CSDL:** Sử dụng MySQL hoặc PostgreSQL theo yêu cầu của dự án.
*   **Thiết kế bảng:** Tạo các bảng cần thiết với các trường dữ liệu phù hợp (ví dụ: `users`, `orders`, `agents`, `admins`, `customers`, `shippers`, `shipments`, `tracking_history`, `notifications`). Đảm bảo có bảng cho `shippers` và mối quan hệ với `orders`.
*   **Quan hệ:** Định nghĩa các khóa chính, khóa ngoại và các ràng buộc dữ liệu.
*   **Tạo file `schema.sql`:** Xuất cấu trúc CSDL ra file `.sql` để dễ dàng triển khai và chia sẻ.

### 2. Xây dựng dự án Laravel
*   **Khởi tạo dự án:** Sử dụng Composer để tạo một dự án Laravel mới.
    ```bash
    composer create-project --prefer-dist laravel/laravel courierxpress_backend
    cd courierxpress_backend
    ```
*   **Cấu hình môi trường:** Cấu hình file `.env` để kết nối với cơ sở dữ liệu đã thiết kế.
*   **Tạo Models:** Tạo các Eloquent Models tương ứng với các bảng trong CSDL, bao gồm cả `Shipper` model.
    ```bash
    php artisan make:model User
    php artisan make:model Order
    php artisan make:model Shipper
    # ... và các model khác
    ```
*   **Tạo Migrations:** Sử dụng Migrations để định nghĩa cấu trúc bảng trong CSDL. Điều này giúp quản lý phiên bản CSDL và dễ dàng triển khai trên các môi trường khác nhau. Đảm bảo có migration cho bảng `shippers` và các trường liên quan đến việc phân đơn cho shipper.
    ```bash
    php artisan make:migration create_users_table
    php artisan make:migration create_orders_table
    php artisan make:migration create_shippers_table
    # ... và các migration khác
    php artisan migrate
    ```
*   **Tạo Seeders (Tùy chọn):** Tạo dữ liệu mẫu cho CSDL để phục vụ quá trình phát triển và kiểm thử.
    ```bash
    php artisan make:seeder UserSeeder
    php artisan db:seed
    ```

### 3. Xây dựng RESTful API
*   **API Xác thực (Authentication API):**
    *   Sử dụng Laravel Sanctum hoặc Laravel Passport để xử lý đăng ký (chỉ cho user thông thường), đăng nhập, và quản lý token (API Token/OAuth2).
    *   Triển khai các endpoint cho `register` (chỉ user), `login` (user, admin, agent), `logout`, `user_profile`.
    *   **Lưu ý:** Việc tạo tài khoản Agent và Shipper sẽ do Admin quản lý, không có API đăng ký công khai cho Agent/Shipper.
*   **API Phân quyền (Authorization API):**
    *   Sử dụng Laravel Gates và Policies để định nghĩa quyền truy cập cho các vai trò (Admin, Agent, Shipper, Public User).
    *   Đảm bảo rằng mỗi vai trò chỉ có thể truy cập vào các tài nguyên và thực hiện các hành động được phép.
*   **API nghiệp vụ:** Phát triển các API cho các luồng sau:
    *   **Luồng Public:**
        *   API tra cứu đơn hàng (tracking by ID).
        *   API đặt hàng (nếu có).
    *   **Luồng Admin:**
        *   API quản lý người dùng (CRUD: Create, Read, Update, Delete).
        *   API quản lý đơn hàng (CRUD).
        *   API quản lý Agent (CRUD).
        *   API quản lý Shipper (CRUD).
        *   API quản lý khách hàng (CRUD).
        *   API quản lý báo cáo (Generate reports).
        *   API phân đơn hàng cho Shipper.
    *   **Luồng Agent (Chi nhánh quản lý giao hàng):**
        *   API tạo đơn hàng mới.
        *   API cập nhật trạng thái đơn hàng.
        *   API xem các đơn hàng được giao cho chi nhánh đó.
        *   API quản lý Shipper thuộc chi nhánh (CRUD).
        *   API phân đơn hàng cho Shipper thuộc chi nhánh.
    *   **Luồng Shipper:**
        *   API xem các đơn hàng được giao cho Shipper đó.
        *   API cập nhật trạng thái đơn hàng (ví dụ: đã lấy hàng, đang giao, đã giao).
*   **Định nghĩa Routes:** Định nghĩa các route API trong `routes/api.php`.
*   **Tạo Controllers:** Tạo các Controller để xử lý logic cho từng API endpoint.
    ```bash
    php artisan make:controller Api/AuthController
    php artisan make:controller Api/Admin/UserController
    # ... và các controller khác
    ```
*   **Kiểm thử API:** Sử dụng Postman hoặc công cụ tương tự để kiểm thử tất cả các API endpoint, đảm bảo chúng hoạt động đúng và trả về dữ liệu theo định dạng JSON.

## Bàn giao
*   Cung cấp tài liệu API (ví dụ: Swagger/OpenAPI) cho Hợp và Phúc.
*   Đảm bảo các endpoint hoạt động ổn định và có thể truy cập được từ môi trường phát triển của Hợp và Phúc.
*   Chia sẻ file `schema.sql` và hướng dẫn cài đặt môi trường Backend.

