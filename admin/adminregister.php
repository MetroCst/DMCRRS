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
    
            <form action="saveadmin.php" method="post" class="login-box">
                <h1>Register</h1>

                <label>Username</label>
                <input type="text" name="username" required>

                <label>Email</label>
                <input type="text" name="email" required>

                <label>Password</label>
                <input type="password" name="pass" required>

                <input type="submit" name="btnregister" value="Register">

                <p class="register-link">Already have an account? <a href="index.php">Login here</a></p>
            </form>
    </main>
</body>
</html>