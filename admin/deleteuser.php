<?php
include '../conn.php';
$ID = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM user WHERE id='$ID'");
header("location: adminDashboard.php");
?>