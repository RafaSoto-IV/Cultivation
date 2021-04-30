<?php
    error_reporting(E_ALL);
    ini_set("display_errors", "on");

    $server = $_GET["server"];
    $user   = $_GET["user"];
    $pwd    = $_GET["pwd"];
    $dbName = $_GET["dbName"];

    $mysqli = new mysqli($server, $user, $pwd, $dbName);

    if ($mysqli->connect_errno) {
        die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
    } 

    $mysqli->select_db($dbName) or die($mysqli->error);

    error_reporting(0);
    $plantName = $_GET['plantName'];
    $season = $_GET['season'];
    $plantType = $_GET['plantType'];
    $difficulty = $_GET['difficulty'];
    error_reporting(E_ALL);

    $plantName = $mysqli->real_escape_string($plantName);
    $season = $mysqli->real_escape_string($season);
    $plantType = $mysqli->real_escape_string($plantType);
    $difficulty = $mysqli->real_escape_string($difficulty);

    $query = "SELECT * FROM Plants WHERE ";

    if ($plantName != '') {
        $query .= "plantName = '$plantName' AND ";
    } 
    if ($season != '') {
        $query .= "season = '$season' AND ";
    } 
    if ($plantType != '') {
        $query .= "plantType = '$plantType' AND ";
    }
    if ($difficulty != '') {
        $query .= "difficulty = '$difficulty' AND ";
    }

    $query = rtrim($query,' AND ');
    $query = rtrim($query,' WHERE ');

    $result = $mysqli->query($query) or die($mysqli->error);
    $count = $result->num_rows;

    if ($count > 0) {
        $display_string = "";

        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $display_string .= "<div class=\"plantCard\">";
            $display_string .= "<a href=\"plants.html\"><img class=\"plantPic\" src=\"$row[img]\" alt=\"plant picture\"></a>";
            $display_string .= "<a href=\"plants.html\"><h4>$row[plantName]</h4></a>";
            $display_string .= "<p>$row[plantInfo]</p>";
            $display_string .= "</div>";
        }
        $display_string .= "</table>";
    } else {
        $display_string = "No plants found. Try broadening your search.";
    }
    
    echo $display_string;
?>