<?php
	$site = $_GET['article'].'.html';
	setcookie("page", $site, time()+200, "/");

	if(!isset($_COOKIE["user_name"])){
		echo "go to form";
		header('Location:login.php');
	
	} else {
		echo "go to website $site";
		header('Location:  '.$site);
	}
?>	
