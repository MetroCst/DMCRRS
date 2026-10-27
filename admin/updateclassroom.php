<?php
include '../conn.php';

$ID = $_GET['ID'];
$classroom = $_POST['classroom'];
$capacity = $_POST['capacity'];
$availability = $_POST['availability'];

$query = mysqli_query($conn, "update classroom set classroom='$classroom', capacity='$capacity', availability='$availability' Where id='$ID'");
header("location: adminDashboard.php");
?>
