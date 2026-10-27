<?php
include '../conn.php';

$ID = (int) $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM classroom WHERE id = $ID");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Classroom</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body class="admin-page">
    <?php include '../admin-nav-head.php'; ?>

    <main class="main">
        <h2>Edit Classroom</h2>
        <form action="updateclassroom.php?ID=<?php echo $ID; ?>" method="post">
            <label for="classroom">Classroom Name:</label>
            <input type="text" id="classroom" name="classroom" value="<?php echo $row['classroom']; ?>">
            <label for="capacity">Capacity:</label>
            <input type="number" id="capacity" name="capacity" value="<?php echo $row['capacity']; ?>">
            <label for="availability">Availability:</label>
            <input type="text" id="availability" name="availability" value="<?php echo $row['availability']; ?>">
            <input type="submit" name="update" value="Update">
        </form>
    </main>
</body>
</html>
