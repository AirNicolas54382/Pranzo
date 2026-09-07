<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../CSS/style.css'>
    <link rel='stylesheet' href='../CSS/Rezervati.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <script  type="text/javascript">
        function change_to_red(z){
            document.getElementById(z).src = "../Images/chair_red.png";
            document.getElementById(z).setAttribute('onclick','')
}
        </script>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap' rel='stylesheet'>
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
    <main>
        <?php
        error_reporting(0);
        $z = 0;
        $t = 0;
        for($y = 0; $y<=3; $y++){
        echo'<div>';
        for($i = 0; $i<=5; $i++){
            $t++;
            echo"
        <div class='table_chairs'>
            <div class='Up'>
            ";
            $z++;
            echo"    <img class='chair 1 table".$t."' src='../Images/chair.png' onclick='chair_rezervation($z)' id='$z' name='$z'>
            </div>
            <div class='Middle'>
            ";
            $z++;
            echo" <img class='chair chair_left 1 table".$t."' src='../Images/chair.png' onclick='chair_rezervation($z)' id='$z' name='$z'> ";
            echo"  <img class='table ' src='../Images/table.png' onclick='table_rezervation($t)'>";
            $z++;
            echo"  <img class='chair chair_right 1 table".$t."' src='../Images/chair.png' onclick='chair_rezervation($z)' id='$z' name='$z'>";
            $z++;
            echo" 
        </div>
        <div class='Down'>
            <img class='chair 1 table".$t."'src='../Images/chair.png' onclick='chair_rezervation($z)' id='$z' name='$z'>
        </div>
        </div>
            ";
        };
        echo'</div>';
    }
    $con = mysqli_connect("localhost", "root", "", "pranzo");
    $query1 = "SELECT * from rezervation";
    $query1_done = mysqli_query($con, $query1);
    while($row = mysqli_fetch_array($query1_done)){
      if($row['Rezerved']=='f'){
          $z = $row['ID'];
          echo'<script type="text/javascript">change_to_red(' .$z. ')</script>';
      }
    };
        ?>
    <?php
    $rezervation = $_POST['rezervation'];
    $rezervation = explode(" ", $rezervation);
    $i = count($rezervation);
    //$query = "INSERT INTO rezervation(ID, Rezerved) Value (null,'true')";
    for ($i; $i>=0; $i--){
         $z = trim(intval($rezervation[$i]));
         $query2 = " UPDATE rezervation SET Rezerved = 'f' WHERE ID = $z";
         $query2_done = mysqli_query($con, $query2);
    }
      //  $query_done = mysqli_query($con, $query);
    ?>
    </main>
    <div>
    <form action="Rezervation.php" method="POST">
<input type="text" name="rezervation" value="" id="rezervation">
<button onclick="refresh()">Reserve</button>
</form>
    </div>
    <script src='../JS/Rezervation.js'></script>
</body>
</html>