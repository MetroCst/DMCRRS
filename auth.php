<?php
session_start();

include 'conn.php';

if (isset($_POST['btnlogin'])) {

    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username == '' || $password == '') {

        echo "Please enter your username and password.";
        exit();
    }

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = mysqli_query($conn,"select * from user where username='$username' AND password='$password' LIMIT 1"
    );

    if (mysqli_num_rows($query) > 0) {

        $row = mysqli_fetch_assoc($query);

        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        header('Location: Dashboard.php');
        exit();

    } else {

        echo "Invalid";
        echo "<a href='index.php'>Try again</a>";
    }
}
?>