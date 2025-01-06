<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management System</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<style>
    .hero{
        background: url('images/Back-ground.jpg') no-repeat center center/cover;
    }
</style>
<body>
    <!-- Header Section -->
    <header>
        <h1>M & H Car Services</h1>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <a href="#">Home Page</a>
        <a href="aboutus.php">About Us</a>
        <a href="cars.php">View Cars</a>
        <a href="contact.php">Contact Us</a>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Welcome To M & H Car Services</h2>
        <p>"Our customers enjoy comfort, performance, and personalized features in every drive."</p>
        <button onclick="window.location.href='cars.php';">Get A Car</button>
    </section>

    <!-- Features Section -->
    <section class="features container">
        <div class="feature">
            <img src="images/location.webp" alt="">
            <h3>Location</h3>
            <p>Saida, Opposite Hariri Roundabout.</p>
        </div>
        <div class="feature">
            <img src="images/working_hours.webp" alt="">
            <h3>Working Hours</h3>
            <p>Open Monday to Friday, 9 AM - 6 PM.</p>
        </div>
        <div class="feature">
            <img src="images/customer_reviews.webp" alt="">
            <h3>Customers Services</h3>
            <p>We provide top-quality services to ensure our customers' success and satisfaction.</p>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <!-- Feedback Form -->
        <div class="feedback-form-container">
            <h3>We value your feedback!</h3>
            <form action="feedback_action.php" method="POST" class="feedback-form">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="txt_name" required placeholder="Your Name">

                <label for="email">Your Email</label>
                <input type="email" id="email" name="txt_email" required placeholder="Your Email">

                <label for="message">Your Feedback</label>
                <textarea id="message" name="txt_feedback" required placeholder="Your Feedback"></textarea>

                <button type="submit">Submit Feedback</button>
            </form>
        </div>
        <p>&copy; 2025 M & H Car Services. All rights reserved.</p>
    </footer>
</body>
</html>
