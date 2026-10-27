<?php
include 'conn.php';

$id = $_GET['id'];
$availability = $_POST['Availability'];

mysqli_query($conn, "UPDATE classroom SET availability = '$availability' WHERE id = $id");

header("Location: Dashboard.php#Classrooms");
exit;
?>
