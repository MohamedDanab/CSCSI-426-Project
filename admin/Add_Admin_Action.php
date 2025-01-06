<?php
include("connection/connection.php");
$FullName = $_POST['txt_FullName'];
$email = $_POST['txt_email'];
$password = $_POST['txt_password'];

$sql = "INSERT INTO  add_admin(db_FullName,db_email,db_password) VALUES('$FullName','$email','$password')";

mysqli_query($con, $sql) or die(mysqli_error($con));
header("location:add_admin.php");
?>