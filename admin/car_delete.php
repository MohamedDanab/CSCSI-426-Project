<?php
include "connection/connection.php";
$car = $_GET['ID'];

$sql_images = "SELECT img FROM car_images WHERE car_id = '$car'";
$result_images = mysqli_query($con, $sql_images);

while ($image = mysqli_fetch_assoc($result_images)) {
    $image_path = "images/" . $image['img'];

    if (file_exists($image_path)) {
        unlink($image_path);
    }
}

$sql_car = "DELETE FROM cars WHERE id = '$car'";
mysqli_query($con, $sql_car);

$sql_delete_images = "DELETE FROM car_images WHERE car_id = '$car'";
mysqli_query($con, $sql_delete_images);

header("Location: dashboard.php");
exit;
?>
