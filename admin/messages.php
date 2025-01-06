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
    <title>Messages Page</title>
    <link rel="stylesheet" href="CSS/messages.css">
</head>
<body>
    <div class="sidebar">
        <h2><u>Admin Menu</u></h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="add_admin.php">Add Admin</a>
        <a href="addCar.php">Add Car</a>
        <a href="#">Messages</a>
        <a href="feedback.php">Feedback</a>
        <a href="logout_action.php">Logout</a>
    </div>

    <div class="main">
        <div class="container">
            <h1><u>Messages</u></h1>

            <table>
                <thead>
                    <tr>
                        <th>Message Number</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("connection/connection.php");
                    $sql="SELECT * FROM messages";
                    $result=mysqli_query($con,$sql);

                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tr>
                                <td>".$row['db_message_nb']."</td>
                                <td>".$row['db_name']."</td>
                                <td>".$row['db_email']."</td>
                                <td>".$row['db_message']."</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
