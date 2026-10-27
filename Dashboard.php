<?php
include 'session.php';
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'user-nav-head.php'; ?>

    <main class="main">
        <div id="Home" class="Home">
            <h1>Welcome to the Classroom Reservation System</h1>
            <p>The CPSU Classroom Reservation System is a web-based application that helps students, faculty, and staff
                manage classroom reservations efficiently. Users can register or log in, view available classrooms,
                check schedules, request rooms, and manage their profiles from one central dashboard.</p>
            <div class="home-actions">
                <a href="#Classrooms">View Classrooms</a>
                <a href="#Reservations">View Reservations</a>
            </div>
        </div>

        <section class="content-section" id="Classrooms">
            <div class="section-header">
                <h2>Available Classrooms</h2>
            </div>
            <div class="class-table">
                <table border="1">
                    <tr>
                        <th>id</th>
                        <th>Classroom</th>
                        <th>Capacity</th>
                        <th>Availability</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                        <?php
                        $query = mysqli_query($conn, "select * from `classroom`");
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['classroom']; ?></td>
                                <td><?php echo $row['capacity']; ?></td>
                                <td><?php echo $row['availability']; ?></td>
                                <td>
                                    <form class="action-form" action="reserve.php?id=<?php echo $row['id']; ?>"
                                        method="post">
                                        <input type="hidden" name="availability" value="Reserved">
                                        <button type="submit" class="reserve-btn">Reserve</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="content-section" id="Reservations">
            <div class="section-header">
                <h2>My Reservations</h2>
            </div>
            <div class="reservation-table">
                <table border="1">
                    <tr>
                        <th>id</th>
                        <th>Classroom</th>
                        <th>Capacity</th>
                        <th>Availability</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                        <?php
                        $userId = (int) $_SESSION['id'];
                        $query = mysqli_query($conn, "SELECT * FROM `classroom` WHERE `user_id` = $userId AND `availability` = 'Reserved'");
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['classroom']; ?></td>
                                <td><?php echo $row['capacity']; ?></td>
                                <td><?php echo $row['availability']; ?></td>
                                <td>
                                    <form class="action-form" action="available.php?id=<?php echo $row['id']; ?>"
                                        method="post">
                                        <input type="hidden" name="Availability" value="Available">
                                        <button type="submit" class="availability-btn">Cancel</button>
                                    </form>
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