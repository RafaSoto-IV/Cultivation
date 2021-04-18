<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../cultivation.css">
    <title>Browse | Shrubs</title>
  </head>
  <body onload="test()">
    <header>
      <div style="width:70%; float:left;">
      <a href="../home.html"><img class="logo" src="../Photos/logo.png" alt="logo"></a>
      <br><h1 style="font-size:75px">Shrubs</h1>
      </div>
      <div style="width:25%; float:right; text-align:right;">
        <img class="profile" src="../Photos/profile.png" alt="profile">
        <br><br><br><a href="login.html"><h3>Login</h3></a>
        <a href="register.html"><h3>Register</h3></a>
      </div>
    </header>
    <div id="container">
      <div id="navbar">
        <h1>
          <a href="../home.html">Home</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="browse.php">Browse</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="my_plants.html">My Plants</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="about_us.html">About Us</a>
        </h1>
      </div>

      <div id="rightnav"></div>

      <div class="cardContainer">
        <h1>Browse</h1>

    <?php

    $server = "spring-2021.cs.utexas.edu";
    $user   = "cs329e_bulko_kmw4287";
    $pwd    = "Invest=soothe=slate";
    $dbName = "cs329e_bulko_kmw4287";

    function run() 
        {

        global $server, $user, $pwd, $dbName;

        $mysqli = new mysqli ($server, $user, $pwd, $dbName);

        if ($mysqli->connect_errno) {
            die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
        }
        
        $command = "SELECT * FROM Plants";

        $result = $mysqli->query($command);

        if (!$result) {
            die("Query failed: ($mysqli->error <br>");
        }

        while ($row = mysqli_fetch_row($result)) {
            echo "<div class=\"plantCard\">";
            echo "<a href=\"plants.html\"><img class=\"plantPic\" src=\"$row[2]\" alt=\"plant picture\"></a>";
            echo "<a href=\"plants.html\"><h4>$row[1]</h4></a>";
            echo "<p>$row[3]</p>";
            echo "</div>";
        }
    }

    run();

    ?>

    </div>

    <div id="footer">
        Copyright © 2021 The Roots - Austin,Tx
    </div>
    </div>
    </body>
</html>