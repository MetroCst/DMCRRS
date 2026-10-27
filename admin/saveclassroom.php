<?php
include '../conn.php';

$classroom = mysqli_real_escape_string($conn, $_POST['classroom']);
$capacity = (int) $_POST['capacity'];
$availability = mysqli_real_escape_string($conn, $_POST['availability']);

mysqli_query($conn, "INSERT INTO classroom (classroom, capacity, availability) VALUES ('$classroom', $capacity, '$availability')");
header("Location: adminDashboard.php#Classrooms");
?>