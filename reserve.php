<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit;
}

include 'conn.php';

$id = (int) $_GET['id'];
$userId = (int) $_SESSION['id'];

mysqli_query($conn, "UPDATE classroom SET availability = 'Reserved', user_id = $userId WHERE id = $id");
header("Location: Dashboard.php#MBB");
exit;
?>
