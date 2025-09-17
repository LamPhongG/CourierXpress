# Hướng dẫn phát triển Frontend (Phúc) - Luồng Admin & Agent

## Mục tiêu
Phát triển phần Frontend cho các luồng Quản trị viên (Admin) và Chi nhánh quản lý giao hàng (Agent), bao gồm việc xây dựng giao diện, tích hợp API CRUD và các chức năng nghiệp vụ đặc thù cho từng vai trò. Đồng thời, Phúc sẽ chịu trách nhiệm về phần API nghiệp vụ cho các luồng này và phát triển **phần body của trang chủ**.

## Các bước thực hiện

### 1. Luồng Public (index.html) - Tập trung vào Body
*   **Dựng giao diện Body của trang chủ:**
    *   Phát triển phần body của trang chủ (`index.html`), tích hợp với phần header do Hợp phát triển.
    *   Nội dung phần body sẽ bao gồm các phần giới thiệu dịch vụ, tính năng nổi bật, lời chứng thực, thông tin liên hệ, và footer.
    *   Đảm bảo giao diện responsive, hiển thị tốt trên các thiết bị khác nhau.
    *   **Lưu ý:** Cần phối hợp chặt chẽ với Hợp để đảm bảo sự liền mạch giữa header và body.

### 2. Luồng Quản trị viên (Admin) - admin_dashboard.html
*   **Dựng giao diện trang Admin:**
    *   Thiết kế giao diện dashboard tổng quan cho Admin, bao gồm các menu điều hướng đến các chức năng quản lý khác nhau (quản lý đơn hàng, quản lý agent, quản lý shipper, quản lý khách hàng, báo cáo, v.v.).
    *   Đảm bảo giao diện trực quan, dễ sử dụng cho người quản trị.
    *   Sử dụng các thư viện UI/UX (ví dụ: Bootstrap, Materialize CSS) để tăng tốc độ phát triển và đảm bảo tính nhất quán.
*   **Dùng JavaScript gọi các API CRUD:**
    *   Tích hợp các API do Phong cung cấp để thực hiện các thao tác CRUD (Create, Read, Update, Delete) cho các đối tượng quản lý:
        *   **Quản lý đơn hàng:** Hiển thị danh sách đơn hàng, thêm mới, chỉnh sửa, xóa đơn hàng, cập nhật trạng thái đơn hàng.
        *   **Quản lý Agent:** Hiển thị danh sách agent, thêm mới, chỉnh sửa thông tin agent, vô hiệu hóa/xóa agent. **Lưu ý: Chỉ Admin mới có quyền thêm mới Agent.**
        *   **Quản lý Shipper:** Hiển thị danh sách shipper, thêm mới, chỉnh sửa thông tin shipper, vô hiệu hóa/xóa shipper.
        *   **Quản lý khách hàng:** Hiển thị danh sách khách hàng, chỉnh sửa thông tin khách hàng, xem lịch sử đơn hàng của khách hàng.
        *   **Quản lý báo cáo:** Gọi API để lấy dữ liệu báo cáo và hiển thị dưới dạng bảng hoặc biểu đồ (nếu có).
        *   **Phân đơn hàng cho Shipper:** Xây dựng giao diện để Admin có thể chọn đơn hàng và gán cho một Shipper cụ thể.
    *   Sử dụng `Fetch API` hoặc thư viện HTTP client (ví dụ: Axios) để gửi các yêu cầu API.
    *   Đảm bảo gửi kèm `token` xác thực (lấy từ quá trình đăng nhập của Hợp) trong mỗi yêu cầu API cần xác thực.
*   **Render dữ liệu ra các bảng quản lý:**
    *   Sử dụng JavaScript để lấy dữ liệu từ API và hiển thị động vào các bảng trên giao diện Admin.
    *   Triển khai chức năng phân trang, tìm kiếm, lọc và sắp xếp dữ liệu để dễ dàng quản lý.

### 3. Luồng Chi nhánh quản lý giao hàng (Agent) - agent_dashboard.html
*   **Dựng giao diện cho Agent:**
    *   Thiết kế giao diện dashboard cho Agent, tập trung vào các chức năng chính mà một chi nhánh quản lý giao hàng cần (ví dụ: danh sách đơn hàng được giao, tạo đơn hàng mới, cập nhật trạng thái, quản lý shipper, phân đơn hàng).
    *   Giao diện cần đơn giản, dễ thao tác, đặc biệt trên thiết bị di động (nếu có).
*   **Làm chức năng tạo đơn hàng mới (gọi API):**
    *   Xây dựng form cho phép Agent nhập thông tin để tạo một đơn hàng mới (thông tin người gửi, người nhận, loại hàng, trọng lượng, v.v.).
    *   Sử dụng JavaScript để gửi dữ liệu form đến API tạo đơn hàng của Backend.
    *   Xử lý phản hồi từ API và hiển thị thông báo thành công/thất bại.
*   **Làm chức năng cập nhật trạng thái (gọi API):**
    *   Hiển thị danh sách các đơn hàng được giao cho chi nhánh đó.
    *   Cung cấp giao diện để Agent có thể cập nhật trạng thái của đơn hàng (ví dụ: đã lấy hàng, đang vận chuyển, đã giao, hủy).
    *   Sử dụng JavaScript để gọi API cập nhật trạng thái của Backend, truyền vào mã đơn hàng và trạng thái mới.
    *   Xử lý phản hồi và cập nhật lại giao diện.
*   **Quản lý Shipper (thuộc chi nhánh):**
    *   Xây dựng giao diện để Agent có thể xem danh sách Shipper thuộc chi nhánh của mình.
    *   Cung cấp chức năng thêm mới, chỉnh sửa thông tin Shipper, vô hiệu hóa/xóa Shipper thuộc chi nhánh.
*   **Phân đơn hàng cho Shipper:**
    *   Xây dựng giao diện để Agent có thể xem các đơn hàng chưa được phân công và gán cho một Shipper cụ thể thuộc chi nhánh của mình.

## Bàn giao
*   Cung cấp các file HTML, CSS, JavaScript cho các luồng Admin và Agent, cũng như phần body của trang chủ.
*   Đảm bảo các luồng này hoạt động ổn định và tương thích với API Backend, cũng như luồng đăng nhập do Hợp phát triển.

