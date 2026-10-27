<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPSU Classroom Reservation System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="topbar">
        <h1>Central State Philippine University</h1>
    </header>

    <aside class="Indexsidebar">
        <h2>CPSU Classroom Reservation System</h2>
    </aside>

    <main class="indexmain">
            <form action="auth.php" method="post" class="login-box">
                <h2>Login</h2>

                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                <input type="submit" name="btnlogin" value="Login">

                <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
                <p>Log-in as Admin: <a href="admin/adminlogin.php">Admin Login</a></p>
            </form>
    </main>
</body>

</html>