<?php session_start();
require "db.php";

if($_SERVER ['REQUEST_METHOD'] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * 
    FROM users
    WHERE username = ?");
    
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if($user && password_verify($password, $user["password_hash"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["role"] = $user["role"];

        header("Location: admin.php"); // yet to come ?? I have to recheck this please don't adjust things
        exit;
    }
    else {
        echo "Invalid username or password. Please try again.";
    }
}
?>