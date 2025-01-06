<?php
session_start();
include "connection/connection.php";

$email=$_POST['txt_email'];
$password=$_POST['txt_password'];

$sql="SELECT * FROM add_admin WHERE db_email='$email' AND db_password='$password'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    $_SESSION['admin']=$email;
    header(("location:dashboard.php"));
}
else{
    header("location:login.php?error=1");
}



?>