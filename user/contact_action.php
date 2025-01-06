<?php
include("connection/connection.php");

$name = $_POST['txt_name'];
$email = $_POST['txt_email'];
$message = $_POST['txt_message'];

$sql = "INSERT INTO messages(db_name, db_email, db_message) VALUES('$name', '$email', '$message')";

if (mysqli_query($con, $sql)) {
    session_start();
    $_SESSION['message_status'] = 'success';
    $_SESSION['message'] = 'Message successfully received!';
} 
else {
    session_start();
    $_SESSION['message_status'] = 'error';
    $_SESSION['message'] = 'Failed to send message. Please try again.';
}

header("Location: contact.php");
exit;
?>
