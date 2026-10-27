<?php
include '../conn.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pass'];

mysqli_query($conn, "insert into admin (username, email, password) values ('$username', '$email', '$password')");
    header("Location: ../index.php");
?>