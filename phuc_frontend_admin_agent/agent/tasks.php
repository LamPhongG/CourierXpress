<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
// requireLogin(); // Tạm thời bỏ qua để test
// requireRole('agent'); // Tạm thời bỏ qua để test
$page_title = 'Quản lý nhiệm vụ';
require_once '../includes/templates/header.php';

// Dữ liệu mẫu để test
$tasks = [
    ['id' => 1, 'tracking_code' => 'TRK001', 'status' => 'pending', 'address' => '123 Nguyễn Văn Cừ, Q1, HCM'],
    ['id' => 2, 'tracking_code' => 'TRK002', 'status' => 'shipped', 'address' => '456 Lê Lợi, Q3, HCM'],
    ['id' => 3, 'tracking_code' => 'TRK003', 'status' => 'delivered', 'address' => '789 Trần Hưng Đạo, Q5, HCM'],
    ['id' => 4, 'tracking_code' => 'TRK004', 'status' => 'pending', 'address' => '321 Võ Văn Tần, Q3, HCM'],
];
// $result = $db->query("SELECT * FROM orders WHERE agent_id = {$_SESSION['user_id']}");
// $tasks = $result->fetch_all(MYSQLI_ASSOC);
?>

<div class="agent-layout mobile-first">
    <div class="kanban-board">
        <div class="column" data-status="pending">
            <h3>Chờ xử lý</h3>
            <?php foreach ($tasks as $task): if ($task['status'] === 'pending'): ?>
            <div class="task-card card" draggable="true" data-id="<?php echo $task['id']; ?>">
                <p><strong><?php echo $task['tracking_code']; ?></strong></p>
                <p><?php echo $task['address']; ?></p>
                <span class="status-badge pending">Pending</span>
            </div>
            <?php endif; endforeach; ?>
        </div>
        
        <div class="column" data-status="shipped">
            <h3>Đang giao</h3>
            <?php foreach ($tasks as $task): if ($task['status'] === 'shipped'): ?>
            <div class="task-card card" draggable="true" data-id="<?php echo $task['id']; ?>">
                <p><strong><?php echo $task['tracking_code']; ?></strong></p>
                <p><?php echo $task['address']; ?></p>
                <span class="status-badge shipped">Shipped</span>
            </div>
            <?php endif; endforeach; ?>
        </div>
        
        <div class="column" data-status="delivered">
            <h3>Đã giao</h3>
            <?php foreach ($tasks as $task): if ($task['status'] === 'delivered'): ?>
            <div class="task-card card" draggable="true" data-id="<?php echo $task['id']; ?>">
                <p><strong><?php echo $task['tracking_code']; ?></strong></p>
                <p><?php echo $task['address']; ?></p>
                <span class="status-badge delivered">Delivered</span>
            </div>
            <?php endif; endforeach; ?>
        </div>
    </div>
</div>

<script>
document.querySelectorAll('.task-card').forEach(card => {
    card.addEventListener('dragstart', (e) => e.dataTransfer.setData('text', e.target.dataset.id));
});
document.querySelectorAll('.column').forEach(col => {
    col.addEventListener('drop', (e) => {
        const id = e.dataTransfer.getData('text');
        fetch('../api/orders.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ id, status: col.dataset.status })
        });
    });
    col.addEventListener('dragover', (e) => e.preventDefault());
});
</script>

<style>
.kanban-board { display: flex; gap: 20px; margin: 20px 0; }
.column { 
    flex: 1; 
    background: #f8f9fa; 
    padding: 15px; 
    border-radius: 8px; 
    min-height: 400px;
}
.column h3 { 
    margin-top: 0; 
    text-align: center; 
    color: #495057; 
    border-bottom: 2px solid #dee2e6; 
    padding-bottom: 10px; 
}
.task-card { 
    margin-bottom: 10px; 
    padding: 15px; 
    cursor: grab; 
    transition: transform 0.2s;
}
.task-card:hover { transform: translateY(-2px); box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
.task-card:active { cursor: grabbing; }
.status-badge { 
    padding: 4px 8px; 
    border-radius: 12px; 
    font-size: 0.8em; 
    font-weight: bold; 
    text-transform: uppercase;
}
.status-badge.pending { background: #fff3cd; color: #856404; }
.status-badge.shipped { background: #d4edda; color: #155724; }
.status-badge.delivered { background: #d1ecf1; color: #0c5460; }
</style>

<?php require_once '../includes/templates/footer.php'; ?>