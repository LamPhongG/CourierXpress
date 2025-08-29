<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
// requireLogin(); // Tạm thời bỏ qua để test
// requireRole('agent'); // Tạm thời bỏ qua để test
$page_title = 'Tạo đơn hàng';
require_once '../includes/templates/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tracking_code = uniqid('TRK');
    // Thông báo tạo đơn thành công (không lưu database khi test)
    $success_message = "Đơn hàng đã được tạo với mã: " . $tracking_code;
    // $stmt = $db->prepare("INSERT INTO orders (user_id, agent_id, tracking_code, status) VALUES (?, ?, ?, 'pending')");
    // $stmt->bind_param('iis', $_SESSION['user_id'], $_SESSION['user_id'], $tracking_code);
    // if ($stmt->execute()) {
    //     header('Location: tasks.php');
    // }
}
?>

<div class="agent-layout mobile-first">
    <?php if (isset($success_message)): ?>
        <div class="success-message card" style="background: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border-radius: 4px;">
            ✅ <?php echo $success_message; ?>
        </div>
    <?php endif; ?>
    <form method="POST" id="shipment-form">
        <div class="step" data-step="1">
            <input type="text" name="address" class="input-field" placeholder="Địa chỉ">
            <button type="button" onclick="nextStep(2)">Tiếp</button>
        </div>
        <div class="step hidden" data-step="2">
            <input type="number" name="weight" class="input-field" placeholder="Khối lượng (kg)">
            <p>Giá: <span id="price">0 VND</span></p>
            <button type="submit" class="button-primary">Tạo đơn</button>
        </div>
        <div class="progress-bar"></div>
    </form>
</div>

<script>
function nextStep(step) {
    document.querySelectorAll('.step').forEach(s => s.classList.add('hidden'));
    document.querySelector(`.step[data-step="${step}"]`).classList.remove('hidden');
    document.querySelector('.progress-bar').style.width = `${step * 50}%`;
}
document.querySelector('[name="weight"]').addEventListener('input', (e) => {
    const weight = parseFloat(e.target.value) || 0;
    document.getElementById('price').textContent = (weight * 50000).toLocaleString('vi-VN') + ' VND';
});
</script>

<style>
.hidden { display: none; }
.progress-bar { height: 4px; background: #007bff; width: 50%; transition: width 0.3s; }
.step { margin: 20px 0; }
.agent-layout { max-width: 500px; margin: 0 auto; padding: 20px; }
</style>

<?php require_once '../includes/templates/footer.php'; ?>