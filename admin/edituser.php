<?php
include '../conn.php';

$ID = $_GET['id'];
$query = mysqli_query($conn, "select * from user where id='$ID'");
$row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body class="admin-page">
    <?php include '../admin-nav-head.php'; ?>

    <main class="main">
    <form action="updateuser.php?ID=<?php echo $_GET['id']; ?>" method="POST">
        Name:
        <input type="text" name="username" value="<?php echo $row['username']; ?>">
        Email:
        <input type="text" name="email" value="<?php echo $row['email']; ?>">
        Password:
        <input type="text" name="password" value="<?php echo $row['password']; ?>">
        <input type="submit" name="update" value="Update">
    </form>
    </main>
</body>
</html>