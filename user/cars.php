<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Gallery</title>
    <link rel="stylesheet" href="CSS/cars.css">
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <a href="index.php">Home Page</a>
        <a href="#">About Us</a>
        <a href="cars.php">View Cars</a>
        <a href="contact.php">Contact Us</a>
    </nav>

    <!-- Car Gallery Section -->
    <section class="car-gallery">
       <?php
       include('car_action.php');
       ?>
    </section>

</body>
</html>
