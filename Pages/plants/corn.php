<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="corn.js"></script>
    <script src="jquery-3.6.0.js"></script>
    <script src='plantjquery.js'></script>
    <!-- <script type="text/javascript" src="plant_class.js"></script> -->
    <!--<script type="text/javascript" src="simulation.js"></script>-->
    <link rel="stylesheet" href="../../cultivation.css">
    <title></title>
  </head>
  <body onload="cultivate(corn);"">
    <header>
      <div style="width:70%; float:left;">
      <a href="../../home.php"><img class="logo" src="../../Photos/logo.png" alt="logo"></a>
      <br><h1 style="font-size:75px">Shrubs</h1>
      </div>
      <div style="width:25%; float:right; text-align:right;">
        <img class="profile" src="../../Photos/profile.png" alt="profile">
        <br><br><br>
        <?php
        if (isset($_COOKIE["user_name"])){
          echo '<a href="../logout.php"><h3>Logout</h3></a>';
        } else {
          echo '<a href="../login.php"><h3>Login</h3></a>';
          echo '<a href="../register.php"><h3>Register</h3></a>';
        }
        ?>
      </div>
    </header>
    <div id="container">
      <div id="navbar">
        <h1>
          <a href="../../home.php">Home</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="../../Pages/browse.php">Browse</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="../../Pages/cookie.php?article=my_plants">My Plants</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="../../Pages/about_us.php">About Us</a>
        </h1>
      </div>
      <div id="rightnav">

      </div>
      <div id="content">
        <h2><u>My Plants</u></h2>
        <p>
          Drag the watering can over a plant and click on it to water it!
        </p>
        <div>
          <img class = "plant" id = "corn" src = "../../Photos/corn/tile0.png" alt = "" width = "250" height = "250"/>
          <p id = 'plant1done'> </p>
        </div>
        <div id="water" onmousedown="grabber(event); return false" style=" position: absolute; top: 700px; left: 900px; ">
          <img src="../../Photos/wateringcan.png">
        </div>
      </div>
      <div id="footer">
      Copyright © 2021 The Roots - Austin,Tx
      </div>
    </div>
  </body>
</html>