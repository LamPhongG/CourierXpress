<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
header('Content-Type: application/json');

if (isset($_GET['query'])) {
    $query = sanitize($_GET['query']);
    $stmt = $db->prepare("SELECT * FROM services WHERE name LIKE ?");
    $like = "%$query%";
    $stmt->bind_param('s', $like);
    $stmt->execute();
    $results = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    echo json_encode($results);
} else {
    echo json_encode(['error' => 'No query provided']);
}
?>