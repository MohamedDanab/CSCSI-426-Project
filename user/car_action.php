<?php
include("connection/connection.php");

$sql = "SELECT * FROM cars";
$result = mysqli_query($con, $sql);
?>

<section class="car-gallery">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $car_id = $row['id'];
        $image_query = "SELECT * FROM car_images WHERE car_id = $car_id";
        $image_result = mysqli_query($con, $image_query);
        $car_images = [];
        
        while ($image_row = mysqli_fetch_assoc($image_result)) {
            $car_images[] = $image_row['img'];
        }
    ?>
        <div class="car-card">
    <?php
    if (isset($car_images[0])) {
        echo '<img src="images/' . $car_images[0] . '" alt="' . $row['db_car_model'] . '" class="car-image">';
    } else {
        echo '<img src="images/default-car.jpg" alt="Default Car Image" class="car-image">';
    }
    ?>
    <h3><?php echo $row['db_car_brand']; ?> <?php echo $row['db_car_model']; ?></h3>
    <h4><?php echo $row['db_car_color']; ?></h4>
    <br>
    <h4><?php echo $row['db_car_status']; ?></h4>
    <p><?php echo "$" . number_format($row['db_car_price']); ?></p>
    <a href="contact.php?car_id=<?php echo $row['id']; ?>" class="contact-button">Contact Us</a>
</div>
<style>
    .contact-button {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    transition: background-color 0.3s ease;
}

.contact-button:hover {
    background-color: #dc3545;
}
</style>
    <?php
    }
    ?>
</section>

<?php
mysqli_close($con);
?>
