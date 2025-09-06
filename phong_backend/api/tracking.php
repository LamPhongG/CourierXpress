<?php
require _

_once '../includes/config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';
header('Content-Type: application/json');

if (isset($_POST['tracking_code'])) {
    $code = sanitize($_POST['tracking_code']);
    $result = getOrderByTrackingCode($code);
    echo json_encode($result ?: ['error' => 'Not found']);
}
?>