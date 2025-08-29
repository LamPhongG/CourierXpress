<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
$page_title = 'Đăng ký';
require_once '../includes/templates/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = sanitize($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $name = sanitize($_POST['name']);
    $stmt = $db->prepare("INSERT INTO users (email, password, name) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $email, $password, $name);
    if ($stmt->execute()) {
        header('Location: login.php');
    } else {
        $error = "Lỗi đăng ký, thử lại.";
    }
}
?>

<div class="register-form card">
    <?php if (isset($error)) echo "<p class='error-red'>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="name" class="input-field" placeholder="Họ tên" required>
        <input type="email" name="email" class="input-field" placeholder="Email" required>
        <input type="password" name="password" class="input-field" placeholder="Mật khẩu" required>
        <button type="submit" class="button-primary">Đăng ký</button>
    </form>
    <p><a href="login.php">Đã có tài khoản? Đăng nhập</a></p>
</div>

<?php require_once '../includes/templates/footer.php'; ?>