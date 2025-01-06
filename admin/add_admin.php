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
    <title>Admin Page</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="sidebar">
        <h2><u>Admin Menu</u></h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="#">Add Admin</a>
        <a href="addCar.php">Add Car</a>
        <a href="messages.php">Messages</a>
        <a href="feedback.php">Feedback</a>
        <a href="logout_action.php">Logout</a>
    </div>

    <div class="main">
        <div class="container">
            <h1><u>Add New Admin</u></h1>
            <form action="Add_Admin_Action.php" method="POST">
                <label for="username"><u>Full Name:</u></label>
                <input type="text" id="username" name="txt_FullName" placeholder="Enter Full Name" required>

                <label for="email"><u>Email:</u></label>
                <input type="email" id="email" name="txt_email" placeholder="Enter email" required>

                <label for="password"><u>Password:</u></label>
                <input type="password" id="password" name="txt_password" placeholder="Enter password" required>

                <button type="submit">Add Admin</button>
            </form>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                    include("connection/connection.php");
                    $sql="SELECT * FROM add_admin";
                    $result=mysqli_query($con,$sql);

                    while($row=mysqli_fetch_assoc($result)){
    
                    echo"<tr>
                   <td>".$row['id']."</td>
                   <td>".$row['db_FullName']."</td>
                   <td>".$row['db_email']."</td>
                   <td><a href=delete.php?ID=".$row['id'].">Delete</a></td>
                </tr>";
  
}
?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
