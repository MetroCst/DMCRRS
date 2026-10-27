<?php
include '../conn.php';

$ID = (int) $_GET['id'];
mysqli_query($conn, "DELETE FROM classroom WHERE id=$ID");
header("Location: adminDashboard.php#Classrooms");
exit;
