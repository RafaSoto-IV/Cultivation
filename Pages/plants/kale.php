<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="jquery-3.6.0.js"></script>
    <script type="text/javascript" src="kale.js" defer></script>
    <!-- <script type="text/javascript" src="plant_class.js"></script> -->
    <!--<script type="text/javascript" src="simulation.js"></script>-->
    <link rel="stylesheet" href="../../cultivation.css">
    <title></title>
  </head>
  <body onload="cultivate(kale);">
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
        <h2>&nbsp;&nbsp;<u>Kale</u></h2>
        <p>
          Drag the watering can over the plant and click on it to water it!
        </p>
	<div id="thirst" style="color:#9ACD32; font-family: Monaco; font-size:160%;">
	</div>
        <div style="margin-left: 650px; margin-right: 1000px; margin-top: 25px; margin-bottom: 25px; padding-top: 25px;">
          <img class = "plant" id = "kale" src = "../../Photos/kale/tile0.png" alt = "" width = "250px" height = "250px"/>
          <p id = 'plant1done'> </p>
        </div>
        <div id="water" onmousedown="grabber(event); return false" style=" position: absolute; top: 500px; left: 900px; ">
          <img src="../../Photos/wateringcan.png">
        </div>
        <div id="information1" style="display:none;">
          <p>
<b>Planting</b>
<br />- If you're planting seeds, sow 1/4 to 1/2 inch deep into well-drained, light soil.
<br />- After about 2 weeks, thin the seedlings so that they are spaced 8 to 12 inches apart. Kale likes to have plenty of space to stretch out.
<br />- If you're setting out young plants (transplants), plant them at the depth at which they are growing in the container. Space 18 to 24 inches apart.
<br />- After planting, water plants well.

            </p>
          </div>
        <div id="information2" style="display:none;">
          <p>
<b>Care</b>
<br />- It's important to keep kale well watered and fed. If rain is inconsistent, provide 1 to 1.5 inches of water each week (about 1 gallon per square foot).
<br />- Regularly feed kale with a continuous-release plant food.
<br />- Mulch the soil to keep down the weeds and keep kale cool as kale won't grow in hot weather.
<br />- Mulch the soil again heavily after the first hard freeze in the fall; the plants may continue to produce leaves throughout the winter.

            </p>
          </div>
        <div id="information3" style="display:none;">
          <p>
<b>Harvest/Storage</b>
<br />- Kale is ready to harvest when the leaves are about the size of your hand.
<br />- Pick about one fistful of leaves per harvest. Start harvesting the oldest leaves firt from the lowest section of the plant. (Discard any yellowed or torn leaves.)
<br />- Avoid picking the terminal bud (found at the top center of the plant) because this will help to keep the plant productive.
<br />- Kale will continue growing until it's 20&degF. It tastes even sweeter with a touch of frost. (See local frost dates.)
<br />- If you wish to extend your harvest, shield your kale from the cold with row covers. Or, create a makeshift cover with tarps and old blankets propped up by hay bales. Here are a few more season-extending ideas.
<br />- The small, tender leaves can be eaten uncooked and used in salads.
<br />- Cut and cook the larger leaves like spinach, but be sure to remove the tough ribs before cooking.

            </p>
          </div>
        <div id="information4" style="display:none;">
          <p>
<b>Recommended Varieties</b>:
<br />- 'Vates', which is a hardy variety and does not yellow in cold weather. It also has curly, blue-green leaves.
<br />- 'Winterbor', which resembles the 'Vates' variety, but is frost tolerant.
<br />- 'Red Russian', which has red, tender leaves and is an early crop.
<br />
<br /><iframe width="560" height="315" src="https://www.youtube.com/embed/gb5D6RrDBaY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
          </div>
      </div>
      <div id="footer">
      Copyright Â© 2021 The Roots - Austin,Tx
      </div>
    </div>
  </body>
</html>
