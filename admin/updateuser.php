<?php
include '../conn.php';

$ID = $_GET['ID'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "update user set username='$username', email='$email', password='$password' WHERE id='$ID'");
header("location: adminDashboard.php");
?>