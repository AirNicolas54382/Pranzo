<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <script src="../JS/Repeat_Password.js"></script>
    <title>Register</title>
</head>
<body>
    <main>
        <form action="Succes_Register.php" method="POST">
        <h1>Register</h1>
        <input type="email" class="text" placeholder="Email" name="email">
        <input type="password" class="text" placeholder=" New Password" name="password">
        <input type="password" class="text" placeholder="Repeat Password" name="password_repeat">
        <button id="button">Register</button>
        <a href="Login.php">Do you have an account? Log in now </a>
        <a href="Pranzo.html">Home</a>
        </form>
    </main>
</body>
</html>