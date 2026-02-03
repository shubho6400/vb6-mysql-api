<?php
require_once 'config.php';
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data['id'])) {
    // Update existing admin
    $stmt = $pdo->prepare("UPDATE admin SET username = ? WHERE id = ?");
    $stmt->execute([$data['username'], $data['id']]);
} else {
    // Insert new admin
    $stmt = $pdo->prepare("INSERT INTO admin (username) VALUES (?)");
    $stmt->execute([$data['username']]);
}

echo json_encode(['success' => true]);
?>