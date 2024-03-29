<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../cultivation.css">
    <title>About Us | Shrubs</title>
  </head>
  <body>
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
          <a href="../Pages/browse.php">Browse</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="../Pages/cookie.php?article=my_plants">My Plants</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="../Pages/about_us.php">About Us</a>
        </h1>
      </div>

      <div id="rightnav"></div>

      <div class="content" style="text-align: center;">
        <h2><u>About Us</u></h2>
        <p>
          Hello! We are The Roots, an interdisciplinary group of students at the
          University of Texas at Austin. We built this site as a tool to help people
          looking into getting into the gardening hobby by simulating the materials
          and care needed to raise a wide variety of plants. Our information on plant
          data comes from <a href="https://www.almanac.com/">The Old Farmer's Almanac</a> and all art assets come from the
          <a href="https://stardewvalleywiki.com/Stardew_Valley_Wiki">Stardew Valley Wiki</a>. For questions and comments, you can
          reach us at theroots.utexas@gmail.com!
	  <h2><u>Meet The Crew!</u></h2>
        </p>
     <div class="crew" style="text-align: left;">
	<p>
	  <img src="../Photos/characters/gavin.png">
	  Gavin Clarkson
	</p>
	<p>
	  <img src="../Photos/characters/kevin.png">
	  Kevin Wang
	</p>
	<p>
	  <img src="../Photos/characters/marsha.png">
	  Marsha Phillips
	</p>
	<p>
	  <img src="../Photos/characters/rafael.png">
	  Rafael Soto - I am a Sustainability major with an interest in computer programming! 
	</p>
      </div>
      <p>
        Thanks for using our site!
      </p>
    </div>

      <div id="footer">
      Copyright Â© 2021 The Roots - Austin,Tx
      </div>
    </div>
  </body>
</html>
