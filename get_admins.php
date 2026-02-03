<?php
require_once 'config.php';
$stmt = $pdo->query("SELECT id, username, updated_at FROM admin ORDER BY id DESC");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>