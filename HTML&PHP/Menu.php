<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <title>Pranzo</title>
</head>
<body>
    <header>
    <nav>
            <div id="logo-div">
                <img id="logo" src="../Images/Design-Studio-2024-04-14.png">
            </div>
                <ul id="navigation">
                    <li>
                        <a href="../HTML&PHP/Pranzo.html"  class="navigation_a" >Home</a>
                    </li>
                    <li>
                        <a href="../HTML&PHP/Menu.php" class="navigation_a">Menu</a>
                    </li>
                    <li>
                        <a href="../HTML&PHP/Rezervation.php" class="navigation_a">Rezervation</a>
                    </li>
                    <li>
                        <a href="../HTML&PHP/Info.html" class="navigation_a">About us</a>
                    </li>
                </ul>

        </nav>
        </header>
        <div id="Middle">
        <div id="menu-bar">
               <h1>Pranzo</h1>
               <h2>Menu</h2>
        </div>
        
        <div id="menu">
            <?php
                $con =  mysqli_connect("localhost", "root", "", "Pranzo");
                $query1 = mysqli_query($con, "SELECT type from Menu GROUP BY type");
                while($row = mysqli_fetch_array($query1)){

                    echo '<br><div class="menu-type" id="'.$row["type"].'">';
                    $query2 = mysqli_query($con, "SELECT * from menu");
                    echo'<table>';
                    echo '<tr><th colspan="2">'.strtoupper($row["type"]).'</th></tr>';
                    while($row2 = mysqli_fetch_array($query2)){
                        //echo $row2["Type"];
                        if(($row2["Type"]==$row["type"])){
                          //  echo'DZIALA';
                            echo"<tr>";
                            echo"<td style='text-align: left'>";
                            echo $row2["Dish"];
                            echo"</td>";
                            echo"<td style='text-align: right'>";
                            echo $row2["Price"].',00zł';
                            echo"</td>";
                            echo"</tr>";
                        }
                    }
                    echo'</table>';
                    echo'</div>';
                }
            ?>
        </div>
        </div>      
</body>
</html>