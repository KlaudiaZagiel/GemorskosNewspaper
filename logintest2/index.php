<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="style/style.css?v=2">
</head>

<body>

  <!-- top navbar -->
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
    <p>Welcome at Gemorskos Newspaper</p>
  </div>

  <!-- login card -->
  <div class="login-card">

    <!-- message area -->
    <p class="msg">
      <?php
      if (isset($_GET["msg"])) {
        echo $_GET["msg"];
      }
      ?>
    </p>

    <form action="login.php" method="post">

      <label>Username or Email</label>
      <input type="text" name="eml">

      <label>Password</label>
      <input type="password" name="pass1">

      <!-- <div class="remember">
        <input type="checkbox"> Remember Me
      </div> -->

      <button type="submit" name="btn1">Log in</button>

    </form>
  </div>

</body>

</html>