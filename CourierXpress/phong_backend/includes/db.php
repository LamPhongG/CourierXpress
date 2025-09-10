<?php
require_once 'config.php';

function getServices($limit = 10) {
    global $db;
    $result = $db->query("SELECT * FROM services LIMIT $limit");
    return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
}

function getOrderByTrackingCode($code) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM orders WHERE tracking_code = ?");
    $stmt->bind_param('s', $code);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}
?>