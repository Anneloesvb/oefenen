<?php

$landVerwijderen = $_GET["landid"]; // landit haal ik uit oefendoclanden.php
echo $landVerwijderen; // hier echo je de data naar de browser

//dit is een SQL code om een land te verwijderen uit de database
$mysqli = new mysqli("localhost","root","","anneloes");
$sql = "DELETE FROM `landen` WHERE ID='$landVerwijderen'";
$result = $mysqli -> query($sql); 





?>