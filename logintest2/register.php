<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/register.css">
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

    <div class="headbox">
        <h1>Create your account here</h1>
        <p>Welcome to Gemorskos Newspaper</p>
    </div>

    <div class="login-card">

        <form action="registerprocess.php" method="post">

            <label>Username</label>
            <input type="text" name="username" required><br>

            <label>Full Name</label>
            <input type="text" name="fullname">

            <label>E-mail</label>
            <input type="text" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit" name="btn1">Create account</button>

        </form>
    </div>
</body>

</html>