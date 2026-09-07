<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <main>
        <form action="Succes_Login.php" method="POST">
        <h1>Log in</h1>
        <input type="email" class="text" placeholder="Email" name='email'>
        <input type="password" class="text" placeholder="Password" name='password'>
        <button>Log in</button>
        <script>
            function cookie1(){
                let x = document.cookie();
                console.log(x);
            }
        </script>
        <a href="Register.php">Don't have an account? Register now</a>
        <a href="Pranzo.html">Home</a>
        </form>
    </main>
</body>
</html>