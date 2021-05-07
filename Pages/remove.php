<?php
    error_reporting(E_ALL);

    $plantID = $_GET['plantID'];
    $userName = $_COOKIE['user_name'];
    $plantID = (int)$plantID;

    $query = "DELETE FROM Collections WHERE userName='$userName' AND id=$plantID";

    $mysqli = new mysqli("spring-2021.cs.utexas.edu", "cs329e_bulko_kmw4287", "Invest=soothe=slate", "cs329e_bulko_kmw4287");

    $result = $mysqli->query($query) or die($mysqli->error);
?>