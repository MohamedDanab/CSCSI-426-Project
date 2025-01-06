<?php
include "connection/connection.php";
$admin=$_GET['ID'];

$sql="DELETE FROM add_admin WHERE id='$admin'";
mysqli_query($con,$sql);

header("Location:add_admin.php");

?>