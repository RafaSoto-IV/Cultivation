<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="jquery-3.6.0.js"></script>
    <script type="text/javascript" src="corn.js" defer></script>
    <!-- <script type="text/javascript" src="plant_class.js"></script> -->
    <!--<script type="text/javascript" src="simulation.js"></script>-->
    <link rel="stylesheet" href="../../cultivation.css">
    <title></title>
  </head>
  <body onload="cultivate(corn);">
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
        <h2>&nbsp;&nbsp;<u>Corn</u></h2>
        <p>
          Drag the watering can over the plant and click on it to water it!
        </p>
	<div id="thirst" style="color:#9ACD32; font-family: Monaco; font-size:160%;">
	</div>
        <div style="margin-left: 650px; margin-right: 1000px; margin-top: 25px; margin-bottom: 25px; padding-top: 25px;">
          <img class = "plant" id = "corn" src = "../../Photos/corn/tile0.png" alt = "" width = "250px" height = "250px"/>
          <p id = 'plant1done'> </p>
        </div>
        <div id="water" onmousedown="grabber(event); return false" style=" position: absolute; top: 500px; left: 900px; ">
          <img src="../../Photos/wateringcan.png">
        </div>
        <div id="information1" style="display:none;">
          <p>
<b>Planting</b>
<br />- Sow seeds about 1 inch deep and 4 to 6 inches apart in each row.
<br />- Rows should be spaced 30 to 36 inches apart.
<br />- You may choose to fertilize at planting time; corn is meant to grow rapidly. If you are confident that the soil is adequate, this can be skipped.
<br />- Water well at planting time.

            </p>
          </div>
        <div id="information2" style="display:none;">
          <p>
<b>Care</b>
<br />- When the young corn plants are 3 to 4 inches tall, thin them so that they are 8 to 12 inches apart in a row.
<br />- Keep corn well watered, as it has shallow roots and can become stressed by drought.
<br />- Mulch helps reduce evaporation.
            </p>
          </div>
        <div id="information3" style="display:none;">
          <p>
<b>Harvest/Storage</b>
<br />- Harvest when tassels begin to turn brown and cobs start to swell. Kernels should be full and milky.
<br />- Pull ears downward and twist to take off stalk.
<br />- Prepare for eating or preserving immediately after picking.

            </p>
          </div>
        <div id="information4" style="display:none;">
          <p>
            <b>Recommended Varieties</b>:
            <br />- Sugary (short)
    <br />- Argent (medium)
    <br />- Painted Mountain(long)
    <br />
    <br /><iframe width="560" height="315" src="<iframe width="738" height="406" src="https://www.youtube.com/embed/Ts--iMD4YcA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
          </div>
      </div>      <div id="footer">
      Copyright Â© 2021 The Roots - Austin,Tx
      </div>
    </div>
  </body>
</html>
