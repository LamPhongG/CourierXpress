<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: login.php');
        exit;
    }
}

function requireRole($role) {
    requireLogin();
    if ($_SESSION['role'] !== $role) {
        exit('Access denied');
    }
}

function formatPrice($price) {
    return number_format($price, 0, ',', '.') . ' VND';
}

function sanitize($data) {
    global $db;
    return $db->real_escape_string(trim($data));
}


?>