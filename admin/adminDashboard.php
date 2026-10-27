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
        <section id="Users">
            <h2>Users</h2>
            <div class="user-table">
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    include '../conn.php';

                    $query = mysqli_query($conn, "SELECT * FROM `user`");
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td>
                                <a class="action-link edit-link" href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
                                <a class="action-link delete-link" href="deleteuser.php?id=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

            <section class="content-section" id="Classrooms">
                <div class="section-header">
                    <h2>Available Classrooms</h2>
                </div>
                <a class="primary-link" href="addclassroom.php">Add Classroom</a>
                <div class="class-table">
                    <table border="1">
                        <tr>
                            <th>id</th>
                            <th>Classroom</th>
                            <th>Capacity</th>
                            <th>Availability</th>
                            <th>Action</th>
                            <th>Action2</th>
                        </tr>
                        <tbody>
                                <?php
                                include '../conn.php';

                                $query = mysqli_query($conn, "select * from `classroom`");
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['classroom']; ?></td>
                                    <td><?php echo $row['capacity']; ?></td>
                                    <td><?php echo $row['availability']; ?></td>
                                    <td>
                                        <form class="action-form" action="adminreserve.php?id=<?php echo $row['id']; ?>"
                                            method="post">
                                            <input type="hidden" name="availability" value="Reserved">
                                            <button type="submit" class="reserve-btn">Reserve</button>
                                        </form>
                                        <form class="action-form" action="adminavailable.php?id=<?php echo $row['id']; ?>"
                                            method="post">
                                            <input type="hidden" name="Availability" value="Available">
                                            <button type="submit" class="availability-btn">Available</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a class="action-link edit-link"
                                            href="editclassroom.php?id=<?php echo $row['id']; ?>">Edit</a>
                                        <a class="action-link delete-link"
                                            href="deleteclassroom.php?id=<?php echo $row['id']; ?>">Delete</a>
                                    </td>
                                </tr>
                                        <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </section>
    </main>
</body>

</html>