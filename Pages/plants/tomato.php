<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="jquery-3.6.0.js"></script>
    <script type="text/javascript" src="tomato.js"></script>
    <!-- <script type="text/javascript" src="plant_class.js"></script> -->
    <!--<script type="text/javascript" src="simulation.js"></script>-->
    <link rel="stylesheet" href="../../cultivation.css">
    <title></title>
  </head>
  <body onload="cultivate(tomato);">
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
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <u>My Plants</u></h2>
        <p>
          Drag the watering can over a plant and click on it to water it!
        </p>
	<div id="thirst" style="color:#9ACD32; font-family: Monaco; font-size:160%;">
	</div>
        <div>
          <img class = "plant" id = "tomato" src = "../../Photos/tomato/tile0.png" alt = "" width = "250" height = "250"/>
          <p id = 'plant1done'> </p>
        </div>
        <div id="water" onmousedown="grabber(event); return false" style=" position: absolute; top: 500px; left: 900px; ">
          <img src="../../Photos/wateringcan.png">
        </div>
        <div id="information1" style="display:none;">
          <p>
           <b>Planting</b>
<br />- Select a site with full sun and, ideally, a space where tomatoes (and members of their family, especially eggplants, peppers, and potatoes) have not grown in the previous couple of years.<br />- Parsnips need a long growing season, so sow as soon as the soil is workable.
<br />- Dig soil to about 1 foot deep and mix in aged manure and/or compost. 
<br />- Give it two weeks to break down before planting.
<br />- Or, you can plant tomatoes by seed indoors for a head start. Sow seeds a ½ inch deep in small trays 6 to 8 weeks before the average last spring frost date.           </div>
        <div id="information2" style="display:none;">
          <p>

            </p>
          </div>
        <div id="information2" style="display:none;">
          <p>
<b>Care</b>
<br />- Water in the early morning so that plants have sufficient moisture to make it through a hot day.
<br />- Water generously the first few days that the tomato seedlings or transplants are in the ground.
<br />- Then water with about 2 inches (about 1.2 gallons) per square foot per week during the growing season. 
<br />- You should have already worked compost into the soil before planting, and added some bonemeal to the planting hole when transplanting.
<br />- Continue fertilizing tomatoes about every 3 to 4 weeks until frost.
<br />- If growing vining tomatoes, pinch off suckers (new, tiny stems and leaves between branches and the main stem). This aids air circulation and allows more sunlight into the middle of the plant.
<br />- If no flowers form, plants may not be getting enough sun or water (too little can stop flowering).

            </p>
          </div>


	<div id="information3" style="display:none;">
          <p>
<b>Harvest/Storage</b>
<br />- Leave tomatoes on the vine as long as possible.
<br />- Harvest tomatoes when they are firm and very red in color, regardless of size, with perhaps some yellow remaining around the stem.
<br />- Never place tomatoes on a sunny windowsill to ripen; they may rot before they are ripe!


            </p>
          </div>


	<div id="information4" style="display:none;">
          <p>
            <b>Recommended Varieties</b>:
            <br />- ‘Early Cascade’: indeterminate trailing plant, fruit in clusters; disease-resistant (Early)
    	    <br />- ‘Floramerica’: determinate; disease-resistant; firm, deep red flesh, strong plant (Mid-Season)
            <br />- ‘Tomato, Roma VF’: determinate; compact roma tomatoes; resistant to wilts. Meaty interiors and few seeds; heavy-yielding; good for paste and canning. (Late)
            <br />
    <br /><iframe width="718" height="406" src="https://www.youtube.com/embed/rZgtvtDlxd4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </p>
          </div>

      </div>
      <div id="footer">
      Copyright Â© 2021 The Roots - Austin,Tx
      </div>
    </div>
  </body>
</html>
