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
    <title>Add Car</title>
    <link rel="stylesheet" href="CSS/addcar.css">
</head>
<body>
    <div class="sidebar">
        <h2><u>Admin Menu</u></h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="add_admin.php">Add Admin</a>
        <a href="#">Add Car</a>
        <a href="messages.php">Messages</a>
        <a href="feedback.php">Feedback</a>
        <a href="logout_action.php">Logout</a>
    </div>

    <div class="main-content">
        <div class="form-container">
            <h1>Add New Car</h1>
            <form action="addCar_action.php" method="POST" enctype="multipart/form-data">
                <label for="car-model">Car Model</label>
                <input type="text" id="car-model" name="txt_car_model" placeholder="Enter car model" required>

                <label for="car-brand">Car Brand</label>
                <input type="text" id="car-brand" name="txt_car_brand" placeholder="Enter car brand" required>

                <label for="car-price">Purchase Price</label>
                <input type="number" id="car-price" name="purchase_price" placeholder="Enter purchase price" required>

                <label for="car-price">Sold Price</label>
                <input type="number" id="car-price" name="txt_car_price" placeholder="Enter sold price" required>

                <label for="car-model">Car Color</label>
                <input type="text" id="car-color" name="txt_car_color" placeholder="Enter car color" required>

                <label for="car-status">Status</label>
                <select id="car-status" name="txt_car_status" required>
                    <option value="Available">Available</option>
                    <option value="Sold">Sold</option>
                </select>

                <label for="car-photo">Upload Car Photo</label>
                <input type="file" id="images" name="images[]" accept="image/*" multiple>

                <button type="submit">Add Car</button>
            </form>
        </div>
    </div>
</body>
</html>
