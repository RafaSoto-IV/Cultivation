<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="jquery-3.6.0.js"></script>
    <script type="text/javascript" src="parsnip.js" defer></script>
    <!-- <script type="text/javascript" src="plant_class.js"></script> -->
    <!--<script type="text/javascript" src="simulation.js"></script>-->
    <link rel="stylesheet" href="../../cultivation.css">
    <title></title>
  </head>
  <body onload="cultivate(parsnip);">
    <header>
      <div style="width:70%; float:left;">
      <a href="../home.php"><img class="logo" src="../../Photos/logo.png" alt="logo"></a>
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
	<br />
        <h2>&nbsp;&nbsp;<u>Parsnip</u></h2>
        <p>
          Drag the watering can over the plant and click on it to water it!
        </p>
	<div id="thirst" style="color:#9ACD32; font-family: Monaco; font-size:160%;">
	</div>
        <div style="margin-left: 650px; margin-right: 1000px; margin-top: 25px; margin-bottom: 25px; padding-top: 25px;">
          <img class = "plant" id = "parsnip" src = "../../Photos/parsnip/tile0.png" alt = "" width = "250px" height = "250px"/>
          <p id = 'plant1done'> </p>
        </div>
        <div id="water" onmousedown="grabber(event); return false" style=" position: absolute; top: 500px; left: 900px; ">
          <img src="../../Photos/wateringcan.png">
        </div>
        <div id="information1" style="display:none;">
          <p>
<b>Planting</b>
<br />- Always sow fresh seed.
<br />- Parsnips need a long growing season, so sow as soon as the soil is workable.
<br />- Loosen the soil to a depth of 12-15 inches and mix in a 2- to 4-inch layer of compost.
<br />- Sow 2 seeds per inch Â½ an inch deep
<br />- Seedlings will emerge in 2-3 weeks

            </p>
          </div>
        <div id="information2" style="display:none;">
          <p>
<b>Care</b>
<br />- Thin the seedlings to stand 3-6 inches apart.
<br />- Water during the summer if rainfall is less than 1 inch per week.
<br />- Always keep the beds free of weeds.

            </p>
          </div>
        <div id="information3" style="display:none;">
          <p>
<b>Harvest/Storage</b>
<br />- Parsnips mature in about 16 weeks.
<br />- Leave your parsnips in the ground for a few frosts but harvest before the ground freezes.
<br />- If you leave them in the ground for the winter, cover them with a thick layer of mulch and harvest immediately after the ground thaws in the spring.

            </p>
          </div>
        <div id="information4" style="display:none;">
          <p>
            <b>Recommended Varieties</b>:
            <br />- â€˜Avonresisterâ€™ (short)
    <br />- â€˜Cobham Improved Marrowâ€™ (medium)
    <br />- â€˜Gladiatorâ€™ (long)
    <br />
    <br /><iframe width="560" height="315" src="https://www.youtube.com/embed/iR2uA78C9_k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
          </div>
      </div>
      <div id="footer">
      Copyright Â© 2021 The Roots - Austin,Tx
      </div>
    </div>
  </body>
</html>
