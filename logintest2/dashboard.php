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

    <?php if($_SESSION["role"] === "editor"): ?>
        <p>You have editor access. You can manage articles.</p>

    <?php elseif($_SESSION["role"] === "journalist"): ?>
            <p>You have journalist access. You can write and submit articles.</p>

    <?php elseif($_SESSION["role"] === "webdesigner"): ?>
            <p>You have webdesigner access. You can design webpages.</p>

    <?php else: ?>
        <p>Your role does not have specific access rights.</p>
    <?php endif; ?>

    <a href="logout.php">Logout</a> <!-- yet to come-->
</body>
</html>