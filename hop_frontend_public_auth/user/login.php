<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
$page_title = 'Đăng nhập';
require_once '../includes/templates/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = sanitize($_POST['email']);
    $password = $_POST['password'];
    $stmt = $db->prepare("SELECT id, password, role FROM users WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($user_id, $hashed_password, $role);
    if ($stmt->fetch() && password_verify($password, $hashed_password)) {
        $_SESSION['user_id'] = $user_id;
        $_SESSION['role'] = $role;
        header('Location: index.php');
    } else {
        $error = "Sai email hoặc mật khẩu";
    }
    $stmt->close();
}
?>

<div class="login-form card">
    <h2>Đăng nhập CourierXpress</h2>
    <?php if (isset($error)) echo "<p class='error-red'>$error</p>"; ?>
    <form method="POST">
        <input type="email" name="email" class="input-field" placeholder="Email" required>
        <input type="password" name="password" class="input-field" placeholder="Mật khẩu" required>
        <button type="submit" class="button-primary">Đăng nhập</button>
    </form>
    <p><a href="register.php">Chưa có tài khoản? Đăng ký</a></p>
</div>

<?php require_once '../includes/templates/footer.php'; ?>