<?php
include 'conn.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pass'];

mysqli_query($conn, "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')");
    header("Location: index.php");
?>