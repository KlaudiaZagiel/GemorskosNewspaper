<?php session_start();
require "db.php";

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
    "SELECT id, username, full_name, password, role
    FROM users
    WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// verify credentials
if($user && password_verify($password, $user["password"])) {
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["role"] = $user["role"];
    $_SESSION["username"] = $user["username"];
    $_SESSION["full_name"] = $user["full_name"];
    $_SESSION["role"] = strtolower(trim($user["role"]));


    if ($_SESSION["role"] === "admin") {
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