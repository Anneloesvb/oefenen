<?php

// nieuwe landen toevoegen vanuit de pagina: landenformulier.php / we halen daar de informatie op en publiceren het en pushen het naar de database SQL
$titel_van_land = $_GET["landnaam"]; // dit $titel_van_land is een variabele die ik zelf bedacht hebt en landnaam komt uit bestand landenaanmaken.php (de input die ik ophaal)
$inhoud_van_land = $_GET["landinhoud"];
$inwoners_van_land = $_GET["inwoners"];


echo $titel_van_land; // hier toon ik de inhoud
echo $inhoud_van_land;
echo $inwoners_van_land;

//Nu ga ik het pushen naar de database SQL
$mysqli = new mysqli("localhost","root","","anneloes");
$sql = "INSERT INTO landen (Land, Informatie, Inwoners)  VALUES ('$titel_van_land', '$inhoud_van_land', '$inwoners_van_land')";
$result = $mysqli -> query($sql); 
// echo $sql; // met deze code kun je SQL controleren (plak de code in de browser in SQL en starten)
?>

<a href="landenformulier.php">Terug</a>
<a href="oefendoclanden.php">Overzicht</a>