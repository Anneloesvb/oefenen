<?php
$detailOefendocLanden = $_GET["id"];

echo $detailOefendocLanden;

$mysqli = new mysqli("localhost","root","","anneloes");
$sql = "SELECT * FROM landen where ID=".$detailOefendocLanden;
$result = $mysqli -> query($sql);
$row = $result -> fetch_assoc();
echo $row["Land"];
echo '<img src="afbeeldingland/' .($row["Afbeelding"]) .'"width="100%">';
echo $row["Informatie"];
echo $row["Aantal inwoners"];



// $titel_van_blog = $_GET["blogtitel"];
?>