<html lang="en">
<head>
	<title> Shrubs </title>
	<meta charset="utf-8">
	<meta name="description" content="Login">
	<link rel="stylesheet" type="text/css" href="login.css">

<body>
	

<?php
  error_reporting(E_ALL);
  ini_set("display_errors", "on");

 if (isset($_POST["login"]))
 {
  $username = stripslashes($_POST["username"]);
  $username = mysql_real_escape_string($_POST["username"]);
  $password = stripslashes($_POST["password"]);
  $password = mysql_real_escape_string($_POST["password"]);

  $server = "cs.utexas.edu";
  $database = "cs329e_bulko_kmw4287";
  $db_user = "cs329e_bulko_kmw4287";
  $db_password = "Invest=soothe=slate";
  $mysqli = new mysqli ($server, $user, $pwd, $dbName);
  // If it returns a non-zero error number, print a message and stop execution immediately

	if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
  }

  $response = $mysqli->query("SELECT pswd FROM Users WHERE userName = '".$username"'");
  

   if($response == $password){
    setcookie("user_name", $username, time()+1000, "/");
	  if(isset($_COOKIE["page"])){
		  header("Location: ".$_COOKIE["page"]);
	  }else{
		  header("Location: ../home.html");
	  }
    }else{
	    echo "<p>wrong username or password. try again.<p>";
	    login();
   }
 }
  else
 {
    #Haven't logged in yet
    login();
 }

#######################################################################

 function login ()
 {
  $script = $_SERVER['PHP_SELF'];
  print <<<TOP
  <html>
  <head>
  <title> Login Page </title>
  <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>
  <div id="container">
  <h3> Log In or Register </h3>
  <form method = "post" action = "$script">
  <table >
   <tr>
	<td> Enter Username </td>
	<td> <input type = "text" name = "username" size = "30" /></td>
   </tr>
   <tr>
	<td> Enter Password </td>
	<td> <input type = "password" name = "password" size = "30" /></td>
   </tr>

TOP;
   
  print "</td></tr>\n";

  print <<<BOTTOM
  <tr>
  <td><input type = "submit" name = "login" value = "login" /></td>
  <td><input type = "reset" value = "Reset" /></td>
  </tr>
  </table>
  </form>
  </div>
  </body>
  </html>
BOTTOM;
  }

?>

<a href="../home.html">Head Back To The Home Page</a>

	
</body>