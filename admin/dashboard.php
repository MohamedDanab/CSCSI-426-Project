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
    <title>Admin Dashboard - Cars</title>
    <link rel="stylesheet" href="CSS/dashboard.css">
</head>
<body>
<div class="sidebar">
        <h2><u>Admin Menu</u></h2>
        <a href="#">Dashboard</a>
        <a href="add_admin.php">Add Admin</a>
        <a href="addCar.php">Add Car</a>
        <a href="messages.php">Messages</a>
        <a href="feedback.php">Feedback</a>
        <a href="logout_action.php">Logout</a>
    </div>

    <div class="main-content">
        <header>
            <h1>Welcome, Admin</h1>
            <p>Manage your car website efficiently.</p>
        </header>

        <section id="overview">
            <h2>Overview</h2>
            <div class="stats">
            <div class="stat-box">
    <h3>Total Profit</h3>
    <?php
    include("connection/connection.php");    
    $profit_sql = "SELECT SUM(db_car_price - db_purchase_price) AS total_profit FROM cars WHERE db_car_status = 'Sold'";
    $profit_result = mysqli_query($con, $profit_sql);
    
    if ($row = mysqli_fetch_assoc($profit_result)) {
        echo "<p>" . number_format($row['total_profit']) . " $</p>";
    }
    ?>
</div>

                
<div class="stat-box">
    <h3>Available Cars</h3>
    <?php
    include("connection/connection.php");
    $count_sql = "SELECT COUNT(*) AS total_available FROM cars WHERE db_car_status = 'Available'";
    $count_result = mysqli_query($con, $count_sql);
    if ($row = mysqli_fetch_assoc($count_result)) {
        echo "<p> " . $row['total_available'] . "</p>";
    }
    $sql = "SELECT * FROM cars WHERE db_car_status = 'Available'";
    $result = mysqli_query($con, $sql);
    ?>
    </div>

    <div class="stat-box">
    <h3>Sold Cars</h3>
    <?php
    include("connection/connection.php");
    $count_sql = "SELECT COUNT(*) AS total_sold FROM cars WHERE db_car_status = 'Sold'";
    $count_result = mysqli_query($con, $count_sql);
    if ($row = mysqli_fetch_assoc($count_result)) {
        echo "<p>" . $row['total_sold'] . "</p>";
    }
    $sql = "SELECT * FROM cars WHERE db_car_status = 'Sold'";
    $result = mysqli_query($con, $sql);
    ?>
    </div>
</div>
</section>


        <section id="car-management">
            <h2>Car Management</h2>
            <a href="addCar.php">Add Car</a>
            <table>
                <thead>
                    <tr>
                        <th>Car ID</th>
                        <th>Model</th>
                        <th>Brand</th>
                        <th>Purchase Price</th>
                        <th>Sold Price</th>
                        <th>Color</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    include("connection/connection.php");
                    $sql="SELECT * FROM cars";
                    $result=mysqli_query($con,$sql);

                    while($row=mysqli_fetch_assoc($result)){
    
                    echo"<tr>
                   <td>".$row['id']."</td>
                   <td>".$row['db_car_model']."</td>
                   <td>".$row['db_car_brand']."</td>
                   <td>".$row['db_purchase_price']." $</td>
                   <td>".$row['db_car_price']." $</td>
                   <td>".$row['db_car_color']."</td>
                   <td>".$row['db_car_status']."</td>
                   <td><a href=edit.php?ID=".$row['id'].">Edit</a> <a href=car_delete.php?ID=".$row['id'].">Delete</a></td>
                </tr>";
  
}
?>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
