<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $stmt = $db->prepare("UPDATE orders SET status = ? WHERE id = ?");
    $stmt->bind_param('si', $data['status'], $data['id']);
    $stmt->execute();
    echo json_encode(['success' => true]);
}
?>