<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../cultivation.css">
  <title>Browse | Shrubs</title>
</head>
<body>
  <script language="javascript" type="text/javascript">
    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    function ajaxQuery(server,user,pwd,dbName){
      var ajaxRequest;
      ajaxRequest = new XMLHttpRequest();
      ajaxRequest.onreadystatechange = function(){
        if(ajaxRequest.readyState == 4){
          var ajaxDisplay = document.getElementById('ajaxDiv');
          ajaxDisplay.innerHTML = ajaxRequest.responseText;
          $('.collect').click(function() {
            var username = getCookie("user_name");
            if (username == "") {
              var url = location.href;
              window.location.href = url.replace("browse", "login");
            } else {
              var collectPlant = event.target.id;
              var collectPlant = collectPlant.replace("collect", "");
              ajaxCollect(collectPlant);
            }
          });
        }
      }
      var plantName = document.getElementById('plantName').value;
      var season = document.getElementById('season').value;
      var plantType = document.getElementById('plantType').value;
      var difficulty = document.getElementById('difficulty').value;
      var queryString = "?plantName=" + plantName;
      queryString += "&season=" + season + "&plantType=" + plantType + "&difficulty=" + difficulty + "&server=" + server + "&user=" + user + "&pwd=" + pwd + "&dbName=" + dbName;
      ajaxRequest.open("GET", "search.php" + queryString, true);
      ajaxRequest.send(null);
    }

    function ajaxQueryAll(server,user,pwd,dbName){
      var ajaxRequest;
      ajaxRequest = new XMLHttpRequest();
      ajaxRequest.onreadystatechange = function(){
        if(ajaxRequest.readyState == 4){
          var ajaxDisplay = document.getElementById('ajaxDiv');
          ajaxDisplay.innerHTML = ajaxRequest.responseText;
          $('.collect').click(function() {
            var username = getCookie("user_name");
            if (username == "") {
              var url = location.href;
              window.location.href = url.replace("browse", "login");
            } else {
              var collectPlant = event.target.id;
              var collectPlant = collectPlant.replace("collect", "");
              ajaxCollect(collectPlant);
            }
          });
        }
      }
      var queryString = "?server=" + server + "&user=" + user + "&pwd=" + pwd + "&dbName=" + dbName;
      ajaxRequest.open("GET", "search.php" + queryString, true);
      ajaxRequest.send(null);
    }

    function ajaxCollect(pID){
      ajaxRequest = new XMLHttpRequest();
      ajaxRequest.open("GET", "collect.php?plantID=" + pID, true);
      ajaxRequest.send(null);
      alert("Added to My Plants!");
    }
  </script>
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
  <a href="my_plants.php">My Plants</a>
  <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
  <a href="about_us.php">About Us</a>
  </h1>
</div>

<div id="rightnav"></div>

<div class="cardContainer">
<h1>Browse</h1>

<form method="POST">
<?php
  $server = "spring-2021.cs.utexas.edu";
  $user   = "cs329e_bulko_kmw4287";
  $pwd    = "Invest=soothe=slate";
  $dbName = "cs329e_bulko_kmw4287";

  echo "<table><tr><th>Name:</th><th>Season:</th><th>Type:</th><th>Difficulty:</th></tr>";
  echo "<tr><td><input type='text' id='plantName'/></td>";
  echo "<td><select name='season' id='season'><option value=''></option><option value='spring'>Spring</option><option value='summer'>Summer</option><option value='fall'>Fall</option><option value='winter'>Winter</option></select></td>";
  echo "<td><select name='plantType' id='plantType'><option value=''></option><option value='vegetable'>Vegetable</option><option value='flower'>Flower</option><option value='vine'>Vine</option><option value='root'>Root</option></select></td>";
  echo "<td><select name='difficulty' id='difficulty'><option value=''></option><option value='easy'>Easy</option><option value='medium'>Medium</option><option value='hard'>Hard</option>";
  echo "<td><input type=\"button\" onclick=\"ajaxQuery('$server','$user','$pwd','$dbName')\" value=\"Search\"/></td>";
  echo "<td><input type=\"button\" onclick=\"ajaxQueryAll('$server','$user','$pwd','$dbName')\" value=\"View All\"/></td>";
  echo "</tr></table>";
?>
</form>

<div id='ajaxDiv'></div>
</div>

<div id="footer">Copyright © 2021 The Roots - Austin,Tx</div>
</body>
</html>