<html lang="en">
<head>
	<title> Shrubs </title>
	<meta charset="utf-8">
	<meta name="description" content="Login/Register">
	<link rel="stylesheet" type="text/css" href="login.css">

<body>
	

<?php
  error_reporting(E_ALL);
  ini_set("display_errors", "on");

  if($_SERVER["REQUEST_METHOD"]=="POST"){
	# get the incoming information
 	$name = $_POST["username"];
<<<<<<< Updated upstream
  $pass = $_POST["password"];
  }

  $init_state = '$_GET[init_state]'

 if ($init_state == "login") {
     login();
 }elseif ($init_state == "register") {
     register();
 }
=======
  	$pass = $_POST["password"];
	setcookie("user_name", $name, time()+1000, "/");
  }

  

>>>>>>> Stashed changes

 if (isset($_POST["login"]))
 {
   $correct = false;
   if ($fh = fopen("logins.txt", "r")) {
  	 while(!feof($fh)) {
    		$line = fgets($fh);
    		if("$name:$pass \n" == $line){
			$correct = true;
			break;
<<<<<<< Updated upstream
    		} 
=======
		}	
>>>>>>> Stashed changes
   	}
   	fclose ($fh);
   }

   if($correct){
<<<<<<< Updated upstream
	confirmPage($name, $pass);
=======
	if(isset($_COOKIE["page"])){
		header("Location: ".$_COOKIE["page"]);
	}else{
		header("Location: ../home.html");
	}
>>>>>>> Stashed changes
   } else {
	echo "<p>wrong username or password. try again.<p>";
	login();
   }
 }
 elseif (isset($_POST["register"]))
 {
   echo "register";
   register();

 } 
 elseif (isset($_POST["regLog"]))
 {
   echo ("registering");
    $infile = false;
   
   if ($fh = fopen("logins.txt", "r")) {
  	 while(!feof($fh)) {
    		$line = fgets($fh);
		$user = explode(":", $line);
    		if("$name" == $user[0]){
			$infile = true;
			break;
    		} 
   	}
   	fclose ($fh);
   }

   if($infile){
	echo "<p>not unique. try again.<p>";
	register();
   } else {
	if ($fh = fopen("logins.txt", "a")) {
		fwrite ($fh, "$name:$pass \n");
		fclose ($fh);
	}
<<<<<<< Updated upstream
	confirmPage($name, $pass);

=======
	header("Location: ../home.html");	
>>>>>>> Stashed changes
   } 
 }
  else
 {
    echo "login";
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
  <td><input type = "submit" name = "register" value = "Register" /></td>
  <td><input type = "reset" value = "Reset" /></td>
  </tr>
  </table>
  </form>
  </div>
  </body>
  </html>
BOTTOM;
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
<<<<<<< Updated upstream
            msg.innerHTML = "Invalid Username";
        }
        if (!username.match(/^[0-9a-zA-Z]+$/)) {
            msg.innerHTML = "Invalid Username";
        }
        if (!isNaN(parseInt(username.charAt(0)))) {
            msg.innerHTML = "Invalid Username";
=======
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
>>>>>>> Stashed changes
        }
        msg.innerHTML = "Valid Username";
    }
    function validate_password() {
        var msg = document.getElementById("password_text");
        var password = document.getElementById("password").value;
        if ((password.length < 6) || (password.length > 10)) {
<<<<<<< Updated upstream
            msg.innerHTML = "Invalid Password";
        }
        if (!password.match(/^[0-9a-zA-Z]+$/)) {
            msg.innerHTML = "Invalid Password";
=======
	    msg.innerHTML = "Invalid Password";
	    return;
        }
        if (!password.match(/^[0-9a-zA-Z]+$/)) {
	    msg.innerHTML = "Invalid Password";
	    return;
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
            msg.innerHTML = "Invalid Password";
=======
	    msg.innerHTML = "Invalid Password";
	    return;
>>>>>>> Stashed changes
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
