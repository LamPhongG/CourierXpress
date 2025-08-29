<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
// requireLogin(); // Tạm thời bỏ qua để test
// requireRole('admin'); // Tạm thời bỏ qua để test
$page_title = 'Quản lý nhân viên';
require_once '../includes/templates/header.php';

// Dữ liệu mẫu để test
$agents = [
    ['id' => 1, 'name' => 'Nguyễn Văn A', 'email' => 'agent1@example.com', 'role' => 'agent'],
    ['id' => 2, 'name' => 'Trần Thị B', 'email' => 'agent2@example.com', 'role' => 'agent'],
    ['id' => 3, 'name' => 'Lê Văn C', 'email' => 'agent3@example.com', 'role' => 'agent'],
];
// $result = $db->query("SELECT * FROM users WHERE role = 'agent'");
// $agents = $result->fetch_all(MYSQLI_ASSOC);
?>

<div class="admin-layout">
    <?php require_once '../includes/templates/sidebar.php'; ?>
    <main class="main-content">
        <aside class="filters-sidebar">
            <form>
                <select name="status"><option>Active</option></select>
            </form>
        </aside>
        <table class="table">
            <thead><tr><th>Name</th><th>Status</th><th>Actions</th></tr></thead>
            <tbody>
                <?php foreach ($agents as $agent): ?>
                <tr>
                    <td><?php echo htmlspecialchars($agent['name']); ?></td>
                    <td>Active</td>
                    <td><a href="edit-agent.php?id=<?php echo $agent['id']; ?>" class="button-tertiary">Edit</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="pagination">Page 1 of 10</div>
        <form method="POST" action="/admin/bulk-action.php">
            <button type="submit" class="button-primary">Bulk Action</button>
        </form>
    </main>
</div>

<?php require_once '../includes/templates/footer.php'; ?>