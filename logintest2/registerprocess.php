<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $fullname = filter_input(INPUT_POST, "fullname", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password");

    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, full_name, email, password)
    VALUES (:username, :password, :full_name, :email, :password");

        $stmt->execute([
            ":username" => $username,
            ":full_name" => $fullname,
            ":email" => $email,
            ":password" => $password
        ]);

        header("Location: index.php?registered=1");
        exit;
    } catch (PDOException $e) {
        echo "We couldn't create your account: " . $e->getMessage();
    }
}
