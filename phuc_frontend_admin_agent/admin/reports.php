<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
// requireLogin(); // Tạm thời bỏ qua để test
// requireRole('admin'); // Tạm thời bỏ qua để test
$page_title = 'Báo cáo';
require_once '../includes/templates/header.php';
?>

<div class="admin-layout">
    <?php require_once '../includes/templates/sidebar.php'; ?>
    <main class="main-content">
        <div class="report-grid">
            <div class="kpi-card card">
                <h3>Tổng doanh thu</h3>
                <p>10,000,000 VND</p>
            </div>
            <div class="kpi-card card">
                <h3>Đơn hàng hoàn thành</h3>
                <p>1,234</p>
            </div>
            <div class="kpi-card card">
                <h3>Khách hàng mới</h3>
                <p>567</p>
            </div>
        </div>
    </main>
</div>

<style>
.report-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
.kpi-card { text-align: center; }
.kpi-card h3 { margin-bottom: 10px; color: #666; }
.kpi-card p { font-size: 2em; font-weight: bold; color: #007bff; margin: 0; }
</style>

<?php require_once '../includes/templates/footer.php'; ?>