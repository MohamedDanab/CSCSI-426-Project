<?php
include("connection/connection.php");
$name=$_POST['txt_name'];
$email=$_POST['txt_email'];
$feedback=$_POST['txt_feedback'];

$sql="INSERT INTO  feedback(db_name,db_email,db_feedback) VALUES('$name','$email','$feedback')";
mysqli_query($con,$sql) or die(mysqli_error($con));


header("location:index.php");
?>