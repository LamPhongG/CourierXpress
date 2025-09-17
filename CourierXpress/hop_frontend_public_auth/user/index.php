<?php
require_once '../includes/config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';
$page_title = 'Trang chủ';
require_once '../includes/templates/header.php';

$services = getServices(8);
?>

<section class="hero">
    <div class="banner card">Giao hàng siêu tốc với CourierXpress Prime!</div>
    <div class="quick-actions">
        <a href="tracking.php" class="button-primary">Tra cứu đơn hàng</a>
        <a href="login.php" class="button-secondary">Đăng nhập</a>
    </div>
</section>

<section class="services grid">
    <?php foreach ($services as $service): ?>
        <div class="service-card card">
            <h3><?php echo htmlspecialchars($service['name']); ?></h3>
            <p>Giá: <?php echo formatPrice($service['price']); ?></p>
            <div class="ratings">★★★★☆ (4.5)</div>
            <a href="login.php" class="button-primary">Đăng nhập để sử dụng</a>
        </div>
    <?php endforeach; ?>
</section>



<?php require_once '../includes/templates/footer.php'; ?>