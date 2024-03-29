<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="jquery-3.6.0.js"></script>
    <script type="text/javascript" src="rhubarb.js" defer></script>
    <!-- <script type="text/javascript" src="plant_class.js"></script> -->
    <!--<script type="text/javascript" src="simulation.js"></script>-->
    <link rel="stylesheet" href="../../cultivation.css">
    <title></title>
  </head>
  <body onload="cultivate(rhubarb);">
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
	<br />
        <h2>&nbsp;&nbsp;<u>Rhubarb</u></h2>
        <p>
          Drag the watering can over the plant and click on it to water it!
        </p>
	<div id="thirst" style="color:#9ACD32; font-family: Monaco; font-size:160%;">
	</div>
        <div style="margin-left: 650px; margin-right: 1000px; margin-top: 25px; margin-bottom: 25px; padding-top: 25px;">
          <img class = "plant" id = "rhubarb" src = "../../Photos/rhubarb/tile0.png" alt = "" width = "250px" height = "250px"/>
          <p id = 'plant1done'> </p>
        </div>
        <div id="water" onmousedown="grabber(event); return false" style=" position: absolute; top: 500px; left: 900px; ">
          <img src="../../Photos/wateringcan.png">
        </div>
        <div id="information1" style="display:none;">
          <p>
<b>Planting</b>
<br />- Dig large, bushel basket-size holes.
<br />- Space rhubarb plants about 4 feet apart and plant the roots 1 to 3 inches below the surface of the soil, with buds facing up.
<br />- Water well at the time of planting.

            </p>
          </div>
        <div id="information2" style="display:none;">
          <p>
<b>Care</b>
<br />- Mulch generously with a heavy layer of straw to retain moisture and discourage weeds.
<br />- Water your plant well and consistently. Rhubarb needs sufficient moisture, especially during the hot, dry days of summer.
<br />- Remove seed stalks as soon as they appear, as they will only sap energy from the plant that could otherwise be used for producing stalks or roots.
<br />- Each spring, apply a light sprinkling of a fertilizer (10-10-10) when the ground is thawing or has just thawed. See your local frost dates.
<br />- Overcrowding is common problem with rhubarb and can lead to subpar growth. Dig and split rhubarb roots every 3 to 4 years. Divide when plants are dormant in early spring (or late fall). Divisions should have at least one large bud on them.
<br />- In the fall, remove all plant debris. Once your ground freezes, it's best to cover rhubarb with 2 to 4 inches of an organic mulch, preferably well-rotted compost. By adding nitrogen to the soil, you're preparing the rhubarb plants for a good spring season.

            </p>
          </div>
        <div id="information3" style="display:none;">
          <p>
<b>Harvest/Storage</b>
<br />- Do not harvest any stalks during the first growing season, and harvest sparingly in the second year. This allows your plants to become properly established.
<br />- Usually after 3 years, the harvest period runs 8 to 10 weeks long, lasting through mid-summer.
<br />- Harvest stalks when they are 12 to 18 inches long. If the stalks become thin, stop harvesting; this means the plant's food reserves are low.
<br />- Grab the base of the stalk and pull it away from the plant with a gentle twist. If this doesn't work, you can cut the stalk at the base. To prevent the spread of disease, be sure to sanitize the knife before cutting. Discard the leaves.
<br />- Always leave at least 2 stalks per plant to ensure continued production. You may have a bountiful harvest for up to 20 years without having to replace your rhubarb plants.
<br />- It was once believed that the entire rhubarb plant becomes toxic as temperatures warm in the summer. This isn't true, though summer-harvested stalks usually have a tougher texture than those picked in the spring. Nevertheless, after mid-summer, it's best to leave stalks on the plant to allow them to gather energy for next year's growth.

            </p>
          </div>
        <div id="information4" style="display:none;">
          <p>
<b>Recommended Varieties</b>:
<br />- 'Canada Red'
<br />- 'Cherry Red'
<br />- 'Crimson Red'
<br />- 'MacDonald'
<br />- 'Valentine'
<br />- 'Victoria'
<br />
<br /><iframe width="560" height="315" src="https://www.youtube.com/embed/tJ313fR1BRI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</p>
          </div>
      </div>
      <div id="footer">
      Copyright Â© 2021 The Roots - Austin,Tx
      </div>
    </div>
  </body>
</html>

