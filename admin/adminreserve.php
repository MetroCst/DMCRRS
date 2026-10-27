<?php
include '../conn.php';

$id = $_GET['id'];
$availability = $_POST['availability'];

mysqli_query($conn, "UPDATE classroom SET availability = '$availability' WHERE id = $id");

header("Location: adminDashboard.php#Classrooms");
exit;
?>