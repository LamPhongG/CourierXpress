<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, ['ID', 'Date', 'Amount']);
$result = $db->query("SELECT id, created_at, price FROM orders");
while ($row = $result->fetch_assoc()) {
    fputcsv($output, [$row['id'], $row['created_at'], $row['price']]);
}
fclose($output);
?>