<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
// requireLogin(); // Tạm thời bỏ qua để test
// requireRole('admin'); // Tạm thời bỏ qua để test
$page_title = 'Quản lý đơn hàng';
require_once '../includes/templates/header.php';

// Dữ liệu mẫu để test
$orders = [
    ['id' => 1, 'tracking_code' => 'TRK001', 'status' => 'pending', 'created_at' => '2025-08-28 10:00:00'],
    ['id' => 2, 'tracking_code' => 'TRK002', 'status' => 'shipped', 'created_at' => '2025-08-28 09:00:00'],
    ['id' => 3, 'tracking_code' => 'TRK003', 'status' => 'delivered', 'created_at' => '2025-08-27 15:00:00'],
];
// $result = $db->query("SELECT * FROM orders");
// $orders = $result->fetch_all(MYSQLI_ASSOC);
?>

<div class="admin-layout">
    <?php require_once '../includes/templates/sidebar.php'; ?>
    <main class="main-content">
        <table class="table">
            <thead><tr><th>ID</th><th>Status</th><th>Actions</th></tr></thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?php echo $order['id']; ?></td>
                    <td><?php echo $order['status']; ?></td>
                    <td><a href="order-details.php?id=<?php echo $order['id']; ?>" class="button-tertiary">Details</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</div>

<?php require_once '../includes/templates/footer.php'; ?>