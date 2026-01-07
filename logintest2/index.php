<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Gemorskos</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <header>
    <div class="navbar">
      <h2>Gemorskos</h2>
      <ul>
        <li><a href="home.html" class="home">Home</a></li>
        <li><a href="index.php" class="login">Login</a></li>
      </ul>
    </div>
  </header>

  <!-- header section -->
   <div class="headbox">
    <h1>Login</h1>
    <p>Welcome to Gemorskos Newspaper</p>
  </div>

  <!-- login card -->
  <div class="login-card">

    <?php if (isset($_SESSION["error"])) {
    echo "<p style='color:red'>" . htmlspecialchars($_SESSION["error"]) . "</p>";
    unset($_SESSION["error"]);
}
?>

  <form action="login.php" method="post">

      <label>Username</label>
      <input type="text" name="username" required><br>

      <label>Password</label>
      <input type="password" name="password" required>

      <button type="submit" name="btn1">Log in</button>

    </form>
  </div>

</body>
</html>