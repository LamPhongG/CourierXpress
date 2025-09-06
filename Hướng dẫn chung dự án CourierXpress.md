# Hướng dẫn chung dự án CourierXpress

## 1. Giới thiệu dự án

Dự án CourierXpress nhằm mục đích xây dựng một ứng dụng web quản lý dịch vụ chuyển phát nhanh toàn diện, tự động hóa các hoạt động quản lý đơn hàng, khách hàng, nhân viên giao hàng (shipper) và chi nhánh (agent). Mục tiêu chính là tạo ra một hệ thống hiệu quả, thân thiện với người dùng, có khả năng theo dõi đơn hàng theo thời gian thực và cung cấp các báo cáo quản lý chuyên sâu. Dự án này sẽ được phát triển dựa trên các công nghệ hiện đại như PHP/Laravel cho Backend và HTML5/CSS3/JavaScript cho Frontend, với mục tiêu đạt được giao diện và trải nghiệm người dùng chuyên nghiệp tương tự AhaMove.com.

## 2. Cấu trúc dự án và phân công nhiệm vụ

Dự án được chia thành ba phần chính, mỗi phần do một thành viên chịu trách nhiệm phát triển độc lập, sau đó sẽ tích hợp lại. Việc phân chia này nhằm tối ưu hóa quy trình làm việc, giảm thiểu xung đột mã nguồn và đảm bảo mỗi thành viên có thể tập trung sâu vào chuyên môn của mình. Dưới đây là chi tiết phân công và nhiệm vụ của từng thành viên:

### 2.1. Nhiệm vụ của Phong (Backend)

**Mục tiêu:** Phong sẽ chịu trách nhiệm phát triển toàn bộ phần Backend của ứng dụng sử dụng PHP/Laravel. Điều này bao gồm việc thiết kế cơ sở dữ liệu, xây dựng các API RESTful cho tất cả các luồng nghiệp vụ (Public, Admin, Agent, Shipper) và đảm bảo cung cấp các endpoint ổn định, bảo mật cho Frontend.

**Các chức năng chính:**

*   **Thiết kế Cơ sở dữ liệu (CSDL):**
    *   **Phân tích yêu cầu:** Dựa trên tài liệu `CourierXpress.pdf` và các yêu cầu bổ sung từ nhóm, Phong cần phân tích kỹ lưỡng để xác định tất cả các thực thể cần thiết trong hệ thống (ví dụ: `users`, `orders`, `agents`, `admins`, `shippers`, `customers`, `shipments`, `tracking_history`, `notifications`).
    *   **Lựa chọn CSDL:** Sử dụng MySQL hoặc PostgreSQL theo yêu cầu của dự án. Đảm bảo cấu hình kết nối CSDL trong môi trường Laravel.
    *   **Thiết kế bảng:** Tạo các bảng CSDL với các trường dữ liệu phù hợp, định nghĩa kiểu dữ liệu, ràng buộc toàn vẹn (khóa chính, khóa ngoại, unique, not null). Đặc biệt chú ý đến việc thiết kế bảng `shippers` và các trường liên quan đến việc gán đơn hàng cho shipper (ví dụ: `shipper_id` trong bảng `orders`).
    *   **Quan hệ:** Xác định và định nghĩa rõ ràng các mối quan hệ giữa các bảng (one-to-one, one-to-many, many-to-many) để đảm bảo tính nhất quán và hiệu quả của dữ liệu.
    *   **Tạo file `schema.sql`:** Sau khi hoàn tất thiết kế, Phong cần xuất cấu trúc CSDL ra một file `.sql` để dễ dàng chia sẻ và triển khai trên các môi trường khác nhau. File này sẽ là cơ sở để các thành viên khác hiểu về cấu trúc dữ liệu.

*   **Xây dựng dự án Laravel:**
    *   **Khởi tạo dự án:** Sử dụng Composer để tạo một dự án Laravel mới. Ví dụ: `composer create-project --prefer-dist laravel/laravel courierxpress_backend`.
    *   **Cấu hình môi trường:** Cấu hình file `.env` để thiết lập các thông số môi trường, đặc biệt là thông tin kết nối đến cơ sở dữ liệu.
    *   **Tạo Models:** Tạo các Eloquent Models tương ứng với mỗi bảng trong CSDL (ví dụ: `User`, `Order`, `Agent`, `Admin`, `Shipper`, `Customer`). Các model này sẽ giúp tương tác với CSDL một cách dễ dàng và hiệu quả.
    *   **Tạo Migrations:** Sử dụng Laravel Migrations để định nghĩa cấu trúc bảng trong CSDL. Migrations giúp quản lý phiên bản CSDL, cho phép dễ dàng thay đổi và triển khai cấu trúc CSDL trên các môi trường khác nhau. Ví dụ: `php artisan make:migration create_shippers_table`.
    *   **Tạo Seeders (Tùy chọn nhưng khuyến khích):** Tạo dữ liệu mẫu (dummy data) cho CSDL thông qua Seeders. Dữ liệu mẫu rất hữu ích cho quá trình phát triển và kiểm thử Frontend mà không cần nhập liệu thủ công.

*   **Xây dựng RESTful API:**
    *   **API Xác thực (Authentication API):**
        *   Sử dụng Laravel Sanctum hoặc Laravel Passport để xử lý quá trình đăng ký, đăng nhập và quản lý token (API Token/OAuth2). Các endpoint cần thiết bao gồm `register` (chỉ dành cho người dùng thông thường), `login` (dành cho user, admin, agent), `logout`, và `user_profile`.
        *   **Lưu ý quan trọng:** Việc tạo tài khoản Agent và Shipper sẽ được thực hiện bởi Admin thông qua API quản lý, không có API đăng ký công khai cho Agent/Shipper. Điều này đảm bảo tính bảo mật và quản lý tập trung.
    *   **API Phân quyền (Authorization API):**
        *   Triển khai Laravel Gates và Policies để định nghĩa và quản lý quyền truy cập cho từng vai trò (Admin, Agent, Shipper, Public User). Đảm bảo rằng mỗi vai trò chỉ có thể truy cập vào các tài nguyên và thực hiện các hành động được phép theo đúng phân quyền.
    *   **API nghiệp vụ:** Phát triển các API cho các luồng nghiệp vụ cụ thể:
        *   **Luồng Public:** API để tra cứu trạng thái đơn hàng (tracking by ID). Có thể bổ sung API đặt hàng nếu dự án yêu cầu người dùng cuối có thể tự đặt hàng.
        *   **Luồng Admin:** Các API CRUD (Create, Read, Update, Delete) để quản lý toàn bộ hệ thống: người dùng, đơn hàng, Agent, Shipper, khách hàng. Ngoài ra, cần có API để tạo báo cáo và API chuyên biệt để phân công đơn hàng cho Shipper.
        *   **Luồng Agent (Chi nhánh quản lý giao hàng):** Các API để tạo đơn hàng mới, cập nhật trạng thái đơn hàng, xem các đơn hàng được giao cho chi nhánh đó. Đặc biệt, Agent sẽ có các API để quản lý Shipper thuộc chi nhánh của mình (CRUD Shipper) và API để phân công đơn hàng cho các Shipper trong chi nhánh.
        *   **Luồng Shipper:** Các API để Shipper có thể xem danh sách các đơn hàng được giao cho mình và cập nhật trạng thái của các đơn hàng đó (ví dụ: đã lấy hàng, đang giao, đã giao).
    *   **Định nghĩa Routes & Controllers:** Định nghĩa các route API trong `routes/api.php` và tạo các Controller tương ứng để xử lý logic cho từng API endpoint. Đảm bảo cấu trúc thư mục Controller rõ ràng (ví dụ: `Api/AuthController`, `Api/Admin/UserController`).
    *   **Kiểm thử API:** Sử dụng các công cụ như Postman hoặc Insomnia để kiểm thử tất cả các API endpoint. Đảm bảo mỗi API hoạt động đúng chức năng, trả về dữ liệu theo định dạng JSON chuẩn và xử lý lỗi một cách thích hợp.

**Sản phẩm bàn giao của Phong:**

*   Tài liệu API chi tiết (có thể sử dụng Swagger/OpenAPI để tự động hóa việc tạo tài liệu) cho Hợp và Phúc.
*   Các endpoint API hoạt động ổn định và có thể truy cập được từ môi trường phát triển của Hợp và Phúc.
*   File `schema.sql` chứa cấu trúc CSDL hoàn chỉnh.
*   Hướng dẫn chi tiết cài đặt môi trường Backend và chạy dự án.

### 2.2. Nhiệm vụ của Hợp (Frontend Public & Authentication)

**Mục tiêu:** Hợp sẽ phát triển phần Frontend cho các luồng Public (chỉ hiển thị thông tin) và Đăng ký/Đăng nhập. Nhiệm vụ trọng tâm của Hợp là thiết kế và phát triển **header của trang chủ** (`index.html`) một cách chuyên nghiệp, hiện đại, tương tự như AhaMove.com, đảm bảo tính thẩm mỹ và trải nghiệm người dùng tốt nhất.

**Các chức năng chính:**

*   **Luồng Public (index.html) - Tập trung vào Header:**
    *   **Thiết kế và phát triển Header:** Hợp sẽ chịu trách nhiệm chính trong việc thiết kế và triển khai phần header của trang chủ. Điều này bao gồm việc đặt logo, các mục menu điều hướng (Dịch vụ, Khách hàng, Tài xế, Tuyển dụng, Tin tức), và các nút hành động (ví dụ: 


Giao hàng ngay). Mục tiêu là tạo ra một header không chỉ đẹp mắt mà còn có tính năng đầy đủ, responsive trên mọi thiết bị (desktop, tablet, mobile).
    *   **Tích hợp với phần Body:** Hợp cần tạo một cấu trúc HTML rõ ràng và dễ hiểu cho header, để Phúc có thể dễ dàng tích hợp phần body của trang chủ vào sau. Cần có sự phối hợp chặt chẽ giữa Hợp và Phúc để đảm bảo sự liền mạch về thiết kế và chức năng giữa header và body.

*   **Luồng Đăng ký & Đăng nhập (register.html, login.html):**
    *   **Thiết kế Form:** Hợp sẽ thiết kế các form đăng ký (`register.html`) và đăng nhập (`login.html`).
        *   Form đăng ký sẽ bao gồm các trường như tên, email, số điện thoại, mật khẩu, và xác nhận mật khẩu. **Lưu ý: Chức năng đăng ký chỉ dành cho người dùng thông thường.**
        *   Form đăng nhập sẽ bao gồm các trường email/tên đăng nhập và mật khẩu, phục vụ cho cả người dùng thông thường, Admin và Agent.
    *   **Validate phía Client:** Sử dụng JavaScript để thực hiện kiểm tra tính hợp lệ của dữ liệu nhập vào (client-side validation). Điều này bao gồm kiểm tra định dạng email, độ dài mật khẩu, và đảm bảo mật khẩu khớp với xác nhận mật khẩu. Hiển thị các thông báo lỗi rõ ràng và thân thiện với người dùng nếu dữ liệu không hợp lệ.
    *   **Gọi API:** Sau khi dữ liệu được validate thành công, Hợp sẽ sử dụng `Fetch API` (hoặc thư viện tương tự như Axios) để gửi các yêu cầu POST đến các endpoint đăng ký và đăng nhập của Backend (do Phong cung cấp). Đối với đăng ký, gửi thông tin người dùng mới. Đối với đăng nhập, gửi thông tin đăng nhập của người dùng (bao gồm cả vai trò nếu có).
    *   **Xử lý Token và Điều hướng:** Khi đăng nhập thành công, Backend sẽ trả về một token xác thực (ví dụ: JWT) cùng với thông tin về vai trò của người dùng. Hợp cần lưu trữ token này vào `localStorage` hoặc `sessionStorage` của trình duyệt để sử dụng cho các yêu cầu API cần xác thực sau này. Sau đó, điều hướng người dùng đến trang dashboard hoặc trang chính phù hợp với vai trò của họ (ví dụ: người dùng thông thường về trang user dashboard, Admin về admin dashboard, Agent về agent dashboard). Đồng thời, xử lý các trường hợp lỗi từ API (ví dụ: sai tên đăng nhập/mật khẩu, tài khoản đã tồn tại) và hiển thị thông báo phù hợp cho người dùng.

**Sản phẩm bàn giao của Hợp:**

*   Các file HTML, CSS, JavaScript cho phần header của trang chủ (`index.html`).
*   Các file HTML, CSS, JavaScript cho các trang đăng ký (`register.html`) và đăng nhập (`login.html`).
*   Đảm bảo các luồng này hoạt động ổn định, có giao diện chuyên nghiệp và tương thích tốt với API Backend.

### 2.3. Nhiệm vụ của Phúc (Frontend Admin & Agent)

**Mục tiêu:** Phúc sẽ phát triển phần Frontend cho các luồng Quản trị viên (Admin) và Chi nhánh quản lý giao hàng (Agent). Điều này bao gồm việc xây dựng giao diện người dùng, tích hợp các API CRUD và các chức năng nghiệp vụ đặc thù cho từng vai trò. Ngoài ra, Phúc cũng sẽ chịu trách nhiệm phát triển **phần body của trang chủ** (`index.html`).

**Các chức năng chính:**

*   **Luồng Public (index.html) - Tập trung vào Body:**
    *   **Phát triển Body của Trang chủ:** Phúc sẽ chịu trách nhiệm phát triển phần body của trang chủ (`index.html`). Phần này sẽ chứa các nội dung chính như giới thiệu dịch vụ, các tính năng nổi bật, các gói dịch vụ, lời chứng thực từ khách hàng, thông tin liên hệ, và footer. Phúc cần tích hợp phần body này một cách liền mạch với phần header do Hợp phát triển, đảm bảo sự thống nhất về thiết kế và trải nghiệm người dùng.
    *   **Responsive Design:** Đảm bảo phần body hiển thị tốt trên mọi kích thước màn hình và thiết bị.

*   **Luồng Quản trị viên (Admin) - admin_dashboard.html:**
    *   **Thiết kế Giao diện Admin:** Phúc sẽ thiết kế giao diện dashboard tổng quan cho Admin. Giao diện này cần trực quan, dễ sử dụng, và cung cấp các menu điều hướng rõ ràng đến các chức năng quản lý khác nhau (ví dụ: quản lý đơn hàng, quản lý Agent, quản lý Shipper, quản lý khách hàng, báo cáo).
    *   **Tích hợp API CRUD:** Tích hợp các API do Phong cung cấp để thực hiện các thao tác CRUD (Create, Read, Update, Delete) cho các đối tượng quản lý:
        *   **Quản lý đơn hàng:** Hiển thị danh sách đơn hàng, cho phép thêm mới, chỉnh sửa, xóa đơn hàng, và cập nhật trạng thái đơn hàng.
        *   **Quản lý Agent:** Hiển thị danh sách Agent, cho phép thêm mới, chỉnh sửa thông tin Agent, vô hiệu hóa/xóa Agent. **Lưu ý quan trọng: Chỉ Admin mới có quyền thêm mới tài khoản Agent.**
        *   **Quản lý Shipper:** Hiển thị danh sách Shipper, cho phép thêm mới, chỉnh sửa thông tin Shipper, vô hiệu hóa/xóa Shipper.
        *   **Quản lý khách hàng:** Hiển thị danh sách khách hàng, cho phép chỉnh sửa thông tin khách hàng, và xem lịch sử các đơn hàng của từng khách hàng.
        *   **Quản lý báo cáo:** Gọi API từ Backend để lấy dữ liệu báo cáo và hiển thị dưới dạng bảng hoặc biểu đồ trên giao diện Admin.
        *   **Phân đơn hàng cho Shipper:** Xây dựng giao diện cho phép Admin chọn một đơn hàng và gán (phân công) cho một Shipper cụ thể.
    *   **Render Dữ liệu:** Sử dụng JavaScript để lấy dữ liệu từ các API và hiển thị động vào các bảng trên giao diện Admin. Triển khai các chức năng như phân trang, tìm kiếm, lọc và sắp xếp dữ liệu để giúp Admin dễ dàng quản lý.

*   **Luồng Chi nhánh quản lý giao hàng (Agent) - agent_dashboard.html:**
    *   **Thiết kế Giao diện Agent:** Phúc sẽ thiết kế giao diện dashboard cho Agent. Giao diện này cần tập trung vào các chức năng chính mà một chi nhánh quản lý giao hàng cần, bao gồm: danh sách các đơn hàng được giao cho chi nhánh, chức năng tạo đơn hàng mới, cập nhật trạng thái đơn hàng, quản lý Shipper thuộc chi nhánh, và phân đơn hàng cho Shipper.
    *   **Tạo đơn hàng mới:** Xây dựng form cho phép Agent nhập thông tin để tạo một đơn hàng mới (thông tin người gửi, người nhận, loại hàng, trọng lượng, v.v.). Gửi dữ liệu form này đến API tạo đơn hàng của Backend và xử lý phản hồi.
    *   **Cập nhật trạng thái đơn hàng:** Hiển thị danh sách các đơn hàng được giao cho chi nhánh đó. Cung cấp giao diện để Agent có thể cập nhật trạng thái của đơn hàng (ví dụ: đã lấy hàng, đang vận chuyển, đã giao, hủy). Gọi API cập nhật trạng thái của Backend, truyền vào mã đơn hàng và trạng thái mới, sau đó cập nhật lại giao diện.
    *   **Quản lý Shipper (thuộc chi nhánh):** Xây dựng giao diện cho phép Agent xem danh sách các Shipper thuộc chi nhánh của mình. Cung cấp chức năng thêm mới, chỉnh sửa thông tin Shipper, vô hiệu hóa/xóa Shipper thuộc chi nhánh.
    *   **Phân đơn hàng cho Shipper:** Xây dựng giao diện cho phép Agent xem các đơn hàng chưa được phân công và gán cho một Shipper cụ thể thuộc chi nhánh của mình.

**Sản phẩm bàn giao của Phúc:**

*   Các file HTML, CSS, JavaScript cho phần body của trang chủ (`index.html`).
*   Các file HTML, CSS, JavaScript cho các luồng Admin và Agent.
*   Đảm bảo các luồng này hoạt động ổn định, có giao diện chuyên nghiệp và tương thích tốt với API Backend, cũng như luồng đăng nhập do Hợp phát triển.

## 3. Quy trình làm việc chung và phối hợp nhóm

Để đảm bảo dự án được triển khai hiệu quả và đúng tiến độ, nhóm cần tuân thủ quy trình làm việc và phối hợp chặt chẽ:

1.  **Phong (Backend):** Sẽ bắt đầu với việc thiết kế CSDL và xây dựng các API cơ bản, đặc biệt là API xác thực và các API CRUD chính cho các đối tượng quan trọng (người dùng, đơn hàng, agent, shipper). Phong cần cung cấp tài liệu API rõ ràng và các endpoint hoạt động sớm nhất có thể.
2.  **Hợp (Frontend Public & Authentication):** Sẽ bắt đầu phát triển phần header của trang chủ và các trang đăng ký/đăng nhập. Hợp cần tích hợp API xác thực từ Phong ngay khi API này sẵn sàng.
3.  **Phúc (Frontend Admin & Agent):** Sẽ phát triển phần body của trang chủ và các giao diện Admin/Agent. Phúc cần tích hợp các API nghiệp vụ từ Phong và phối hợp với Hợp để đảm bảo sự liền mạch của trang chủ và các luồng xác thực.
4.  **Trao đổi thường xuyên:** Nhóm cần tổ chức các buổi họp ngắn (stand-up meetings) hàng ngày hoặc cách ngày để cập nhật tiến độ, thảo luận các vấn đề phát sinh và đưa ra giải pháp kịp thời. Sử dụng các công cụ giao tiếp nhóm (ví dụ: Slack, Discord) để trao đổi nhanh.
5.  **Quản lý mã nguồn:** Bắt buộc sử dụng hệ thống quản lý phiên bản (ví dụ: Git) với một kho lưu trữ chung (ví dụ: GitHub, GitLab). Mỗi thành viên nên làm việc trên các nhánh (branch) riêng biệt và thực hiện pull request để hợp nhất mã nguồn sau khi đã kiểm thử. Điều này giúp tránh xung đột mã và dễ dàng theo dõi lịch sử thay đổi.
6.  **Kiểm thử tích hợp:** Sau khi các phần riêng lẻ được phát triển, nhóm cần thực hiện kiểm thử tích hợp để đảm bảo tất cả các thành phần (Backend và Frontend) hoạt động cùng nhau một cách trơn tru.
7.  **Tài liệu hóa:** Mỗi thành viên cần duy trì tài liệu hóa công việc của mình, đặc biệt là các quyết định thiết kế, cấu trúc mã, và cách sử dụng các thành phần. Điều này sẽ giúp ích rất nhiều cho việc bảo trì và phát triển trong tương lai.

Chúc các bạn hoàn thành tốt dự án và đạt được kết quả xuất sắc!

