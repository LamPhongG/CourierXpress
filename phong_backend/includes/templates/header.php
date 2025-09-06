<?php
require_once __DIR__ . '/../functions.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/amazon-design-system.css">
    <link rel="stylesheet" href="../assets/css/utils.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>CourierXpress - <?php echo $page_title ?? 'Home'; ?></title>
</head>
<body>
    <header class="amazon-header">
        <div class="header-top">
            <div class="logo">CourierXpress</div>
            <div class="header-nav">
                <a href="<?php echo isLoggedIn() ? 'profile.php' : 'login.php'; ?>">Tài khoản</a>
                <a href="tracking.php">Tra cứu</a>
            </div>
        </div>
        <nav class="header-nav-main nav-menu">
            <a href="../index.php">Trang chủ</a>
            <a href="tracking.php">Tra cứu</a>
            <a href="login.php">Đăng nhập</a>
            <a href="register.php">Đăng ký</a>
        </nav>
    </header>