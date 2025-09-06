<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
// requireLogin(); // Tạm thời bỏ qua để test
// requireRole('agent'); // Tạm thời bỏ qua để test
$page_title = 'Agent Dashboard';
require_once '../includes/templates/header.php';

// Dữ liệu mẫu để test
$tasks = [
    ['id' => 1, 'tracking_code' => 'TRK001', 'status' => 'pending', 'address' => '123 Nguyễn Văn Cừ, Q1, HCM'],
    ['id' => 2, 'tracking_code' => 'TRK002', 'status' => 'shipped', 'address' => '456 Lê Lợi, Q3, HCM'],
    ['id' => 3, 'tracking_code' => 'TRK003', 'status' => 'pending', 'address' => '789 Trần Hưng Đạo, Q5, HCM'],
];
// $result = $db->query("SELECT * FROM orders WHERE agent_id = {$_SESSION['user_id']} LIMIT 5");
// $tasks = $result->fetch_all(MYSQLI_ASSOC);
?>

<div class="agent-layout mobile-first">
    <div class="status-indicators card">Status: Online</div>
    <div class="task-list">
        <?php foreach ($tasks as $task): ?>
        <div class="task-card card swipeable">
            <p>Task #<?php echo $task['id']; ?></p>
            <a href="task.php?id=<?php echo $task['id']; ?>" class="button-primary large">Accept</a>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="map" id="map"></div>
    <div class="earnings card">Earnings: <?php echo formatPrice(500000); ?></div>
</div>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
var map = L.map('map').setView([10.7769, 106.7009], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
</script>

<style>
.mobile-first { max-width: 600px; margin: auto; }
.task-card { transition: transform 0.3s; }
.task-card.swipeable { cursor: grab; }
</style>

<?php require_once '../includes/templates/footer.php'; ?>