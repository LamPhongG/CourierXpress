# Hướng dẫn phát triển Frontend (Hợp) - Luồng Public & Đăng ký/Đăng nhập

## Mục tiêu
Phát triển phần Frontend cho các luồng Public (chỉ hiển thị thông tin) và Đăng ký/Đăng nhập (chỉ dành cho người dùng thông thường), đảm bảo giao diện người dùng thân thiện, dễ sử dụng và tương tác tốt với API Backend. Đặc biệt, Hợp sẽ chịu trách nhiệm chính trong việc thiết kế và phát triển phần **header của trang chủ** để đạt được sự chuyên nghiệp tương tự AhaMove.com.

## Các bước thực hiện

### 1. Luồng Public (index.html) - Tập trung vào Header
*   **Dựng giao diện Header bằng HTML5/CSS3:**
    *   Thiết kế và phát triển phần header của trang chủ (`index.html`).
    *   **Mục tiêu:** Đạt được sự chuyên nghiệp, hiện đại và thân thiện với người dùng, lấy cảm hứng từ header của AhaMove.com (logo, menu điều hướng, nút hành động).
    *   Sử dụng CSS3 để tạo phong cách, đảm bảo tính responsive để hiển thị tốt trên mọi thiết bị.
    *   Đảm bảo các liên kết trong header hoạt động đúng, điều hướng đến các trang phù hợp (ví dụ: trang đăng nhập, trang tra cứu).
*   **Lưu ý:** Phần body của trang chủ (`index.html`) sẽ do Phúc phát triển. Hợp cần tạo một cấu trúc HTML rõ ràng cho header để Phúc có thể dễ dàng tích hợp phần body vào sau.

### 2. Luồng Đăng ký & Đăng nhập (register.html, login.html)
*   **Dựng form, validate phía client bằng JS:**
    *   Thiết kế trang đăng ký (`register.html`) với các trường: tên, email, số điện thoại, mật khẩu, xác nhận mật khẩu. **Chỉ cho phép người dùng thông thường đăng ký.**
    *   Thiết kế trang đăng nhập (`login.html`) với các trường: email/tên đăng nhập, mật khẩu. Dành cho người dùng thông thường, Admin và Agent.
    *   Viết mã JavaScript để kiểm tra tính hợp lệ của dữ liệu nhập vào (ví dụ: định dạng email, độ dài mật khẩu, mật khẩu và xác nhận mật khẩu phải khớp).
    *   Hiển thị thông báo lỗi rõ ràng cho người dùng nếu dữ liệu không hợp lệ.
*   **Gọi API đăng ký/đăng nhập:**
    *   Sau khi validate thành công, sử dụng `Fetch API` để gửi yêu cầu POST đến endpoint đăng ký/đăng nhập của Backend (do Phong cung cấp).
    *   Đối với đăng ký: gửi thông tin người dùng mới.
    *   Đối với đăng nhập: gửi thông tin đăng nhập của người dùng (user, admin, agent).
*   **Lưu token và điều hướng trang:**
    *   Khi đăng nhập thành công, Backend sẽ trả về một `token` (ví dụ: JWT) và thông tin vai trò của người dùng.
    *   Lưu `token` này vào `localStorage` hoặc `sessionStorage` của trình duyệt để sử dụng cho các yêu cầu API cần xác thực sau này.
    *   Điều hướng người dùng đến trang dashboard hoặc trang chính phù hợp với vai trò của họ (ví dụ: user về trang user dashboard, admin về admin dashboard, agent về agent dashboard).
    *   Xử lý các trường hợp lỗi (tên đăng nhập/mật khẩu sai, tài khoản đã tồn tại, v.v.) và hiển thị thông báo phù hợp.

## Bàn giao
*   Cung cấp các file HTML, CSS, JavaScript cho Phúc để tích hợp vào phần Admin/Agent và phần body của trang chủ.
*   Đảm bảo các luồng Public (header) và Đăng ký/Đăng nhập hoạt động ổn định và tương thích với API Backend.

