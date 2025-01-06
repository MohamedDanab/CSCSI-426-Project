<?php
session_start();
if(!isset($_SESSION['admin']))
header("location:login.php?error=2");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <link rel="stylesheet" href="CSS/feedback.css">
</head>
<body>
    <div class="sidebar">
        <h2><u>Admin Menu</u></h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="add_admin.php">Add Admin</a>
        <a href="addCar.php">Add Car</a>
        <a href="messages.php">Messages</a>
        <a href="#">Feedback</a>
        <a href="logout_action.php">Logout</a>
    </div>

    <div class="main">
        <div class="container">
            <h1><u>Feedback</u></h1>

            <table>
                <thead>
                    <tr>
                        <th>Feedback Number</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Feedback</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("connection/connection.php");
                    $sql="SELECT * FROM feedback";
                    $result=mysqli_query($con,$sql);

                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tr>
                                <td>".$row['db_feedback_nb']."</td>
                                <td>".$row['db_name']."</td>
                                <td>".$row['db_email']."</td>
                                <td>".$row['db_feedback']."</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
