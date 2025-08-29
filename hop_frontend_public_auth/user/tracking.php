<?php
require_once '../includes/config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';
$page_title = 'Tra cứu';
require_once '../includes/templates/header.php';

$tracking_result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = sanitize($_POST['tracking_code']);
    $tracking_result = getOrderByTrackingCode($code);
}
?>

<div class="tracking-search">
    <form method="POST">
        <input type="text" name="tracking_code" class="input-field large" placeholder="Nhập mã tra cứu" required>
        <button type="submit" class="button-primary">Tra cứu</button>
    </form>
</div>

<?php if ($tracking_result): ?>
<div class="results card">
    <div class="timeline">
        <div class="status-badge <?php echo $tracking_result['status'] === 'delivered' ? 'success' : 'warning'; ?>">
            <?php echo ucfirst($tracking_result['status']); ?>
        </div>
    </div>
</div>
<?php endif; ?>

<style>
.timeline { position: relative; padding-left: 20px; }
.status-badge { margin: 10px 0; }
.status-badge.success { color: var(--success-green); }
.status-badge.warning { color: var(--warning-orange); }
</style>

<?php require_once '../includes/templates/footer.php'; ?>