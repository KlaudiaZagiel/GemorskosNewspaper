<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- top navbar -->
<div class="topbar">
  <h2 class="logo">Gemorskos</h2>
  <ul class="menu">
    <li>Latest News</li>
    <li>Politics</li>
    <li>Contact Us</li>
    <li>Business</li>
  </ul>
  <div class="usericon">👤</div>
</div>

<!-- header section -->
<div class="headbox">
  <h1>Login</h1>
  <p>Home > Login</p>
</div>

<!-- login card -->
<div class="login-card">

  <!-- message area -->
  <p class="msg">
  <?php
  if(isset($_GET["msg"]))
  {
      echo $_GET["msg"];
  }
  ?>
  </p>

  <form action="login.php" method="post">

    <label>Username or Email</label>
    <input type="text" name="eml">

    <label>Password</label>
    <input type="password" name="pass1">

    <div class="remember">
      <input type="checkbox"> Remember Me
    </div>

    <button type="submit" name="btn1">Log in</button>

  </form>
</div>

</body>
</html>
