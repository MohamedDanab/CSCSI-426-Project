<?php
include("connection/connection.php");
$carModel = $_POST['txt_car_model'];
$carBrand = $_POST['txt_car_brand'];
$purchase_price = $_POST['purchase_price'];
$carPrice = $_POST['txt_car_price'];
$carColor = $_POST['txt_car_color'];
$carStatus = $_POST['txt_car_status'];

$sql = "INSERT INTO  cars(db_car_model, db_car_brand, db_purchase_price, db_car_price, db_car_color, db_car_status) VALUES('$carModel','$carBrand', '$purchase_price','$carPrice', '$carColor','$carStatus')";

mysqli_query($con, $sql) or die(mysqli_error($con));


$car_id = mysqli_insert_id($con); 

if (!empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['images']['name'][$key];
        $file_tmp = $_FILES['images']['tmp_name'][$key];
        $upload_path = "images/" . $file_name;

        if (move_uploaded_file($file_tmp, $upload_path)) {
            $query="INSERT INTO car_images (car_id , img) values ('$car_id' , '$file_name')"; 
            mysqli_query($con, $query);
        }
    }
}
header("location:addCar.php");
?>