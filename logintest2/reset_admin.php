<?php
require("db.php");

$newPassword = "Admin123!";
$hash = password_hash($newPassword, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("UPDATE users SET password = ? WHERE role = 'admin'");
$stmt->execute([$hash]);

echo "All admin passwords reset OK";