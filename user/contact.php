<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="CSS/contact.css">
</head>
<body>

    <?php
    if (isset($_SESSION['message_status'])) {
        $status = $_SESSION['message_status'];
        $message = $_SESSION['message'];
        unset($_SESSION['message_status']);
        unset($_SESSION['message']);
        
        echo "<script>alert('$message');</script>";
    }
    ?>

    <section class="contact-section">
        <div class="contact-form-container">
            <h2>Get in Touch</h2>
            <form action="contact_action.php" method="POST" class="contact-form">
                <label for="name">Name</label>
                <input type="text" id="name" name="txt_name" required placeholder="Your Name">

                <label for="email">Email</label>
                <input type="email" id="email" name="txt_email" required placeholder="Your Email">

                <label for="message">Message</label>
                <textarea id="message" name="txt_message" required placeholder="Your Message"></textarea>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>

            <a href="index.php" class="back-home">Back Home</a>
        </div>
    </section>

</body>
</html>
