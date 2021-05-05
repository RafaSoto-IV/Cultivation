<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cultivation.css">
    <title>Shrubs</title>
  </head>
  <body>
    <header>
      <div style="width:70%; float:left;">
      <a href="home.html"><img class="logo" src="Photos/logo.png" alt="logo"></a>
      <br><h1 style="font-size:75px">Shrubs</h1>
      </div>
      <div style="width:25%; float:right; text-align:right;">
        <img class="profile" src="Photos/profile.png" alt="profile">
        <br><br><br>
        <?php
        if (isset($_COOKIE["user_name"])){
          echo '<a href="Pages/logout.php"><h3>Logout</h3></a>';
        } else {
          echo '<a href="Pages/login.php"><h3>Login</h3></a>';
          echo '<a href="Pages/register.php"><h3>Register</h3></a>';
        }
        ?>
      </div>
    </header>
    <div id="container">
      <div id="navbar">
        <h1>
          <a href="home.html">Home</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="Pages/browse.php">Browse</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="Pages/cookie.php?article=my_plants">My Plants</a>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <a href="Pages/about_us.html">About Us</a>
        </h1>
      </div>

      <div id="rightnav"></div>

      <div class="content">
        <h2><u>Home</u></h2>
        <p>
          <b>- </b>Welcome to Shrubs, where you can grow your own collection of plants and shrubberies online!
        </p>

        <p>
          <b>- </b>To get started, head to our Browse tab to explore the various plants you can grow on our site,
          or use the search function to see if we have a plant you’re interested in!
        </p>

        <p>
          <b>- </b>Register for an account to begin growing your own collection of plants, or login if you already have one!
        </p>
      </div>

      <div id="footer">
      Copyright © 2021 The Roots - Austin,Tx
      </div>
    </div>
  </body>
</html>
