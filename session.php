<?php
session_start();

if(!isset($_SESSION['id'])){
    header('Location: index.php');
    exit();
}

if(isset($_POST['btnlogout'])){
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}
?>