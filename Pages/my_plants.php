<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../cultivation.css">
    <title>My Plants | Shrubs</title>
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
        <div class="plantCard">
          <a href="plants/parsnip.php"><img class="plantPic" src="../Photos/Plants/parsnip.png" alt="plant picture"></a>
          <a href="plants/parsnip.php"><h4>Parsnip</h4></a>
          <p>
            Known scientifically as pastinaca sativa, parsnips are an early spring crop that
            take approximately 16 weeks to mature. Parsnips need full or partial sunlight, and
            are great for colder climate regions. Click the plant name or image to simulate growth!
          </p>
        </div>

        <div class="plantCard">
          <a href="plants/tulip.php"><img class="plantPic" src="../Photos/Plants/tulip.png" alt="plant picture"></a>
          <a href="plants/tulip.php"><h4>Tulip</h4></a>
          <p>
            Known scientifically as tulipa, tulips are an early spring crop that need to be planted in the cold. Bulbs
            can also be refrigerated before planting in warmer areas. Tulips need full or partial sunlight, and are
            great for colder climate regions. Click the plant name or image to simulate growth!
          </p>
        </div>

        <div class="plantCard">
          <a href="plants/kale.php"><img class="plantPic" src="../Photos/Plants/kale.png" alt="plant picture"></a>
          <a href="plants/kale.php"><h4>Kale</h4></a>
          <p>
            Known scientifically as brassica oleracea, kale is an early spring or late summer crop that
            take approximately 8-10 weeks to mature. Kale is very labor intensive and requires consistent watering
            and feeding. Kale is best grown in cooler regions. Click the plant name or image to simulate growth!
          </p>
        </div>

        <div class="plantCard">
          <a href="plants/rhubarb.php"><img class="plantPic" src="../Photos/Plants/rhubarb.png" alt="plant picture"></a>
          <a href="plants/rhubarb.php"><h4>Rhubarb</h4></a>
          <p>
            Known scientifically as rheum rhabarbarum, rhubarb is a perennial crop that takes approximately 5
            weeks to mature. Rhubarb is very pest resistant, although weeding is required to keep the plant healthy.
            Rhubarb needs plenty of sunlight and moderate climates. Click the plant name or image to simulate growth!
          </p>
        </div>
      </div>

      <div id="footer">
      Copyright © 2021 The Roots - Austin,Tx
      </div>
    </div>
  </body>
</html>