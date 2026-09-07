<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Login.css">
    <link rel="stylesheet" href="../CSS/Succes.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <main>
        <?php
        $user_exist = true;
        $email = $_POST['email'];
        $password =  $_POST['password'];
        $password_repeat =  $_POST['password_repeat'];
        if($password != $password_repeat){
            echo '<h1>Incorrectly repeated password</h1>';
            echo'<a href="Register.php">Register again</a>';
        }else{
        $con = mysqli_connect('localhost', 'root','','Pranzo');
        $query1 = "SELECT * from Users";
        $query1_done = mysqli_query($con, $query1);
        while($row = mysqli_fetch_array($query1_done)){
            if($email==$row['User']){
                echo '<h1>This email exist</h1>';
                echo'<a href="Register.php">Register again</a>';
                $user_exist = false;
            }
        } 
        if($user_exist == true){
            echo '<h1>Succes</h1>';
            $query2 = "INSERT INTO users (User, Password) VALUES ('$email', '$password') ";
            $query2_done = mysqli_query($con, $query2);
        }
    }
?>
               <a href="Pranzo.html">Home</a>

       
    </main>
</body>
</html>