<?php
require_once '../includes/config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';
// requireRole('admin'); // Tạm thời bỏ qua để test
$page_title = 'Admin Dashboard';
require_once '../includes/templates/header.php';
?>

<div class="admin-layout">
    <?php require_once '../includes/templates/sidebar.php'; ?>
    <main class="admin-content">
        <h1>Admin Dashboard</h1>
        
        <div class="dashboard-stats">
            <div class="stat-card card">
                <h3>Tổng đơn hàng</h3>
                <p class="stat-number">1,234</p>
            </div>
            <div class="stat-card card">
                <h3>Đơn hàng hôm nay</h3>
                <p class="stat-number">56</p>
            </div>
            <div class="stat-card card">
                <h3>Doanh thu tháng</h3>
                <p class="stat-number">10,000,000 VND</p>
            </div>
            <div class="stat-card card">
                <h3>Nhân viên hoạt động</h3>
                <p class="stat-number">23</p>
            </div>
        </div>

        <div class="recent-orders">
            <h2>Đơn hàng gần đây</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Khách hàng</th>
                        <th>Trạng thái</th>
                        <th>Thời gian</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#001</td>
                        <td>Nguyễn Văn A</td>
                        <td><span class="status-badge pending">Chờ xử lý</span></td>
                        <td>2 phút trước</td>
                        <td><a href="order-details.php?id=1" class="button-tertiary">Xem</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

<style>
.admin-layout { display: flex; }
.admin-content { flex: 1; padding: 20px; }
.dashboard-stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px; }
.stat-card { text-align: center; padding: 20px; }
.stat-number { font-size: 2em; font-weight: bold; color: #007bff; margin: 0; }
.status-badge.pending { background: #ffc107; color: #000; padding: 4px 8px; border-radius: 4px; }
</style>

<?php require_once '../includes/templates/footer.php'; ?>