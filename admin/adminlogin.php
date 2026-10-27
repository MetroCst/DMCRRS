<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body class="admin-page">
    <header class="topbar">
        <h1>Central State Philippine University</h1>
    </header>

    <aside class="Indexsidebar">
        <h2>CPSU Classroom Reservation System</h2>
    </aside>

    <main class="indexmain">
            <form action="adminauth.php" method="post" class="login-box">
                <h2>Login as Admin</h2>

                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                <input type="submit" name="btnlogin" value="Login">

                <p class="register-link">Don't have an account? <a href="adminregister.php">Register as admin</a></p>
                <p>Log-in as User: <a href="../index.php">User Login</a></p>
            </form>
    </main>
</body>
</html>