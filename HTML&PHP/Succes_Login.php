<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Login.css">
    <link rel="stylesheet" href="../CSS/Succes.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="../JS/access.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <main>
        <?php
        $user_find = false;
        $email = $_POST['email'];
        $password =  $_POST['password'];
        $con = mysqli_connect('localhost', 'root','','Pranzo');
        $query1 = "SELECT * from Users";
        $query1_done = mysqli_query($con, $query1);
        while($row = mysqli_fetch_array($query1_done)){
            if($email==$row['User'] && $password==$row['Password']){
                echo '<h1>Succes</h1>';
                $user_find = true;
            }
        } 
        if($user_find == false){
            echo '<h1>User not found</h1>';
            echo '<a href="Login.php">Log in again</a>';
        }
?>
               <a href="Pranzo.html">Home</a>

       
    </main>
</body>
</html>