<html lang="en">
<head>
	<title> Shrubs </title>
	<meta charset="utf-8">
	<meta name="description" content="Register">
	<link rel="stylesheet" type="text/css" href="login.css">

<body>
	

<?php
  error_reporting(E_ALL);
  ini_set("display_errors", "on");

  
  if (isset($_POST["regLog"]))
  {
   $username = $_POST["username"];
   $password = $_POST["password"];
   
   $server = "spring-2021.cs.utexas.edu";
   $database = "cs329e_bulko_kmw4287";
   $db_user = "cs329e_bulko_kmw4287";
   $db_password = "Invest=soothe=slate";
   $mysqli = new mysqli ($server, $db_user, $db_password, $database);
   // If it returns a non-zero error number, print a message and stop execution immediately
 
     if ($mysqli->connect_errno) {
     die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
   }
 
   $stmt = $mysqli->prepare("INSERT INTO Users (userName, pswd)
   VALUES (?,?)");
   $stmt->bind_param("ss", $username, $password);
   
   if($stmt->execute()) {
       echo "Registration Successful!";
       header("Location: ./login.php");
   } else {
       echo "<p>Registration Failed</p>";
       register();
   }
   }
   else
  {
     #Haven't logged in yet
     register();
  }

#######################################################################

  function register()
  {
   $script = $_SERVER['PHP_SELF'];
  print <<<TOPR
  <html>
  <head>
  <title> Register Page </title>
    <link rel="stylesheet" type="text/css" href="newspaperlayout.css">
  </head>
  <body>
  <h3> Log In or Register </h3>
  <form method = "post" action = "$script">
  <table >
   <tr>
	<td> Enter in a unique Username </td>
	<td> <input type = "text" name = "username" id="username" size = "30" onfocusout="validate_username()"/></td>
    <td> <p id = "username_text" style="font-size:11pt"></p> </td>
   </tr>
   <tr>
	<td> Enter Password </td>
	<td> <input type = "password" name = "password" id="password" size = "30" onfocusout="validate_password()"/></td>
    <td> <p id = "password_text" style="font-size:11pt"></p>
   </tr>
   <script language="Javascript">
    function validate_username() {
        var msg = document.getElementById("username_text");
        var username = document.getElementById("username").value;
        if ((username.length < 6) || (username.length > 10)) {
	    msg.innerHTML = "Invalid Username";
	    return;
        }
        if (!username.match(/^[0-9a-zA-Z]+$/)) {
	    msg.innerHTML = "Invalid Username";
  	    return;
        }
        if (!isNaN(parseInt(username.charAt(0)))) {
	    msg.innerHTML = "Invalid Username";
	    return;
        }
        msg.innerHTML = "Valid Username";
    }
    function validate_password() {
        var msg = document.getElementById("password_text");
        var password = document.getElementById("password").value;
        if ((password.length < 6) || (password.length > 10)) {
	    msg.innerHTML = "Invalid Password";
	    return;
        }
        if (!password.match(/^[0-9a-zA-Z]+$/)) {
	    msg.innerHTML = "Invalid Password";
	    return;
        }
        var i = 0;
        var hasNum = false;
        var hasLower = false;
        var hasUpper = false;
        while(i < password.length) {
            var character = password.charAt(i);
            if (!isNaN(parseInt(character))) {
                hasNum = true;
            }
            if ((isNaN(parseInt(character))) && (character === character.toLowerCase())) {
                hasLower = true;
            }
            if ((isNaN(parseInt(character))) && (character === character.toUpperCase())) {
                hasUpper = true;
            }
            i++;
        }
        if (!hasNum || !hasLower || !hasUpper) {
	    msg.innerHTML = "Invalid Password";
	    return;
        } 
        msg.innerHTML = "Valid Password"; 
    }
    </script>
TOPR;
   
  print "</td></tr>\n";

  print <<<BOTTOMR
  <tr>
  <td><input type = "submit" name = "regLog" value = "register" /></td>
  <td><input type = "reset" value = "Reset" /></td>
  </tr>
  </table>
  </form>
  </body>
  </html>
BOTTOMR;
  }
?>

<a href="../home.html">Head Back To The Home Page</a>

	
</body>
</html>