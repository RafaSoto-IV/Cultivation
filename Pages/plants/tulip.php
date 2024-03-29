<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="jquery-3.6.0.js"></script>
    <script type="text/javascript" src="tulip.js" defer></script>
    <!-- <script type="text/javascript" src="plant_class.js"></script> -->
    <!--<script type="text/javascript" src="simulation.js"></script>-->
    <link rel="stylesheet" href="../../cultivation.css">
    <title></title>
  </head>
  <body onload="cultivate(tulip);">
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
        <h2>&nbsp;&nbsp;<u>Tulip</u></h2>
        <p>
          Drag the watering can over the plant and click on it to water it!
        </p>
	<div id="thirst" style="color:#9ACD32; font-family: Monaco; font-size:160%;">
	</div>
        <div style="margin-left: 650px; margin-right: 1000px; margin-top: 25px; margin-bottom: 25px; padding-top: 25px;">
          <img class = "plant" id = "tulip" src = "../../Photos/tulip/tile0.png" alt = "" width = "250px" height = "250px"/>
          <p id = 'plant1done'> </p>
        </div>
        <div id="water" onmousedown="grabber(event); return false" style=" position: absolute; top: 500px; left: 900px; ">
          <img src="../../Photos/wateringcan.png">
        </div>
        <div id="information1" style="display:none;">
          <p>
<b>Planting</b>
<br />- Plant bulbs fairly deep-6 to 8 inches deep, or about three times the height of the bulb. Dig a hole deeper than that in order to loosen the soil and allow for drainage. In clay soils, plant 3 to 6 inches deep instead.
<br />- Set the bulb in the hole with the pointy end up. Cover with soil and press soil firmly.
<br />- Water bulbs right after planting. Although they can't bear wet feet, bulbs need water to trigger growth.
<br />- If you're planning to raise perennial tulips, feed them a balanced fertilizer when you plant them in the fall. Bulbs are their own complete storage system and contain all of the nutrients they need for one year. Use organic material, compost, or a balanced time-release bulb food.
<br />- To deter mice and moles-if they have been a problem-put holly or any other thorny leaves in the planting holes. Some gardeners use kitty litter or crushed gravel. If ravenous voles and rodents are a real problem, you may need to take stronger measures, such as planting bulbs in buried wire cages.
<br />- Don't lose hope if you're planting your tulips later in the season-just follow these tips.

            </p>
          </div>
        <div id="information2" style="display:none;">
          <p>
<b>Care</b>
<br />- If it rains weekly, do not water. However, if there is a dry spell and it does not rain, you should water the bulbs weekly until the ground freezes.
<br />- Rainy summers, irrigation systems, and wet soil are death to tulips. Never deliberately water a bulb bed unless in a drought. Wet soil leads to fungus and disease and can rot bulbs. Add shredded pine bark, sand, or any other rough material to the soil to foster swift drainage.
<br />- Apply compost annually to provide nutrients needed for future blooms.
<br />- In the spring, when leaves emerge, feed your tulip the same bulb food or bone meal which you used at planting time. Water well.
<br />- Deadhead tulips as soon as they go by, but do not remove the leaves!
<br />- Allow the leaves to remain on the plants for about 6 weeks after flowering. The tulips need their foliage to gather energy for next year's blooms! After the foliage turns yellow and dies back, it can be pruned off.
<br />- Large varieties may need replanting every few years; small types usually multiply and spread on their own.

            </p>
          </div>
        <div id="information3" style="display:none;">
          <p>
<b>Recommended Varieties:</b>
<br />- Tulip flowers may be single, double, ruffled, fringed, or lily-shaped, depending on the variety.
<br />- <u>Wild-or "Species"-tulips</u> are small in size, ranging in height from 3 to 8 inches. They are tougher than hybrids. They also bloom in the South and look best when planted as a carpet of color. One of our favorites is 'Lilac Wonder'.
<br />- <u>Triumph hybrids</u> are the classic single, cup-shape tulip that make up the largest grouping of tulip types. Top varieties:
<br />- 'Cracker tulip' is a midspring bloomer with purple, pink, and lilac petals.
<br />- 'Ile de France' is a midseason bloomer, with its intensely red blooms on stems to 20 inches tall.
<br />- 'Calgary' is a midspring bloomer with snowy-white petals and blue-green foliage.
<br />- Though tulips tend be planted as annuals, the Darwin Hybrid tulips are known to act as perennials, blooming for several years.
<br />
 
</p>
          </div>
        <div id="information4" style="display:none;">
          <p>
<br /><iframe width="560" height="315" src="https://www.youtube.com/embed/ewKiHhQZG-Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	  </p>
          </div>
      </div>
      <div id="footer">
      Copyright Â© 2021 The Roots - Austin,Tx
      </div>
    </div>
  </body>
</html>
