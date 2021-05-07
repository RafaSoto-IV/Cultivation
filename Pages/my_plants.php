<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../cultivation.css">
    <title>My Plants | Shrubs</title>
  </head>
  <body>
  <script language="javascript" type="text/javascript">
    function ajaxRemove(pID){
      ajaxRequest = new XMLHttpRequest();
      ajaxRequest.open("GET", "remove.php?plantID=" + pID, true);
      ajaxRequest.send(null);
      alert("Removed from My Plants!");
      location.reload();
    }
  </script>
    <header>
      <div style="width:70%; float:left;">
      <a href="../home.php"><img class="logo" src="../Photos/logo.png" alt="logo"></a>
      <br><h1 style="font-size:75px">Shrubs</h1>
      </div>
      <div style="width:25%; float:right; text-align:right;">
        <img class="profile" src="../Photos/profile.png" alt="profile">
        <br><br><br>
        <?php
        if (isset($_COOKIE["user_name"])){
          echo '<a href="logout.php"><h3>Logout</h3></a>';
        } else {
          echo '<a href="login.php"><h3>Login</h3></a>';
          echo '<a href="register.php"><h3>Register</h3></a>';
        }
        ?>
      </div>
    </header>
    <div id="container">
      <div id="navbar">
        <h1>
          <a href="../home.php">Home</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="browse.php">Browse</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="cookie.php?article=my_plants">My Plants</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="about_us.php">About Us</a>
        </h1>
      </div>

      <div id="rightnav"></div>

      <div class="cardContainer">
        <h1>My Plants</h1>
        <?php
          error_reporting(E_ALL);

          $query = "SELECT DISTINCT * FROM Plants INNER JOIN Collections ON Collections.id = Plants.id WHERE userName = '";
          $query .= $_COOKIE["user_name"] . "'";

          $mysqli = new mysqli("spring-2021.cs.utexas.edu", "cs329e_bulko_kmw4287", "Invest=soothe=slate", "cs329e_bulko_kmw4287");

          $result = $mysqli->query($query) or die($mysqli->error);
          $count = $result->num_rows;

          if ($count > 0) {
            $display_string = "";
    
            while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $display_string .= "<div class=\"plantCard\">";
                $display_string .= "<a href=\"plants/" . strtolower($row['plantName']) . ".php\"><img class=\"plantPic\" src=\"$row[img]\" alt=\"plant picture\"></a>";
                $display_string .= "<a href=\"plants/" . strtolower($row['plantName']) . ".php\"><h4>$row[plantName]</h4></a>";
                $display_string .= "<p>$row[plantInfo]</p>";
                $display_string .= "<button class='remove' id='remove$row[id]'>Remove from My Plants</button>";
                $display_string .= "</div>";
            }
            $display_string .= "</table>";
          } else {
              $display_string = "No plants found. Go to our Browse page to find plants to add to your collection!";
          }
          
          echo $display_string;
          $script = <<<SCRIPT
            <script>
              $('.remove').click(function() {
                var removePlant = event.target.id;
                var removePlant = removePlant.replace('remove', '');
                ajaxRemove(removePlant);
              });
            </script>
SCRIPT;
          echo $script;
        ?>
      </div>

      <div id="footer">
      Copyright © 2021 The Roots - Austin,Tx
      </div>
    </div>
  </body>
</html>
