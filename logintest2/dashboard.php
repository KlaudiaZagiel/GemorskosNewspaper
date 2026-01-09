<?php session_start();

// making sure that the user is logged in

if(!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}

// this file is excl. admins

if($_SESSION["role"] === "admin") {
    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gemorskos</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION["full_name"] ?? $_SESSION ["username"]) ?></h1>
    <p>Your role is <?php echo htmlspecialchars($_SESSION["role"]) ?></p>

    <!-- The rest will come later. -->
</body>
</html>