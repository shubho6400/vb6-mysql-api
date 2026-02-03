<?php
require_once 'config.php';
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data['id'])) {
    $stmt = $pdo->prepare("DELETE FROM admin WHERE id = ?");
    $stmt->execute([$data['id']]);
    echo json_encode(['success' => true]);
} else {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'ID required']);
}
?>