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
        <h2>Add Classroom</h2>
        <form action="saveclassroom.php" method="post">
            <label>Classroom Name:</label>
            <input type="text" name="classroom" required>
            <label>Capacity:</label>
            <input type="number" name="capacity" min="1" required>
            <label>Availability:</label>
            <select name="availability" required>
                <option value="Available">Available</option>
                <option value="Reserved">Reserved</option>
            </select>
            <input type="submit" value="Add Classroom">
        </form>
    </main>
</body>
</html>