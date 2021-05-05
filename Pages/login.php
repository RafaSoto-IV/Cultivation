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
  $server = "spring-2021.cs.utexas.edu";
  $database = "cs329e_bulko_kmw4287";
  $db_user = "cs329e_bulko_kmw4287";
  $db_password = "Invest=soothe=slate";
  $mysqli = new mysqli ($server, $db_user, $db_password, $database);
  // If it returns a non-zero error number, print a message and stop execution immediately

	if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
  }
  $username = $_POST["username"];
  $password = $_POST["password"];
  $username = $mysqli->real_escape_string($username);
  $password = $mysqli->real_escape_string($password);

  $stmt = $mysqli->prepare("SELECT pswd FROM Users WHERE userName =?");
  $stmt->bind_param("s",$username);
  $stmt->execute();
  $response_set = $stmt->get_result();
  $response = $response_set->fetch_all();
  $pass = $response[0][0];
  
   if($pass === $password){
    setcookie("user_name", $username, time()+1000, "/");
	  if(isset($_COOKIE["page"])){
		  header("Location: ".$_COOKIE["page"]);
	  }else{
		  header("Location: ../home.php");
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
  <div id="container">
  <h3> Log In </h3>
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
BOTTOM;
  }

?>

<a href="../home.php">Head Back To The Home Page</a>
</body>
</html>