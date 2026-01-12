<?php session_start();
require "db.php";
die("LOGIN.PHP ON VM REACHED");

if($_SERVER ['REQUEST_METHOD'] !== "POST") {
    header("Location: index.php");
    exit;
}

if(!isset($_POST["username"], $_POST["password"])) {
    $_SESSION["error"] = "Please fill in all the fields!";
    header("Location: index.php");
    exit;
}

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

$stmt = $pdo->prepare(
    "SELECT *
    FROM users 
    WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// verify credentials
if($user && password_verify($password, $user["password"])) {
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["role"] = $user["role"];

    if ($user["role"] === "admin") {
        header("Location: admin.php");
    } else {
        header("Location: dashboard.php");
    }
    exit;
}
else {
    $_SESSION["error"] = "Invalid username or password. Please try again.";
    header("Location: index.php");
    exit;
}
?>