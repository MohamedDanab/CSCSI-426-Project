<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<style>
    body{
        background-image: url('images/Back-ground.jpg');
    }
</style>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="loginAction.php" method="POST">
            <input type="text" name="txt_email" placeholder="Email" required>
            <input type="password" name="txt_password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
