<?php
// dit is de pagina voor alle dieren / alle dieren worden getoond op 1 pagina via deze pagina
// eerst maak ik een variabele aan, variable in php begint altijd met $
$detailsDierenPagina = $_GET["id"]; // ik ga de id halen uit het oefendoc waar ik een functie ga aanmaken waarin ik aangeef dat zodra er op "lees meer" button geklikt wordt er een nieuwe pagina geopend wordt (zie function oefendoc.php)
echo $detailsDierenPagina; // hier laat ik het zien in de browser



//

$mysqli = new mysqli("localhost","root","","anneloes");
$sql = "SELECT * FROM dieren where ID=".$detailsDierenPagina;
$result = $mysqli -> query($sql);
$row = $result -> fetch_assoc();
echo '<h1>' .$row["Naam"] .'</h1>';
echo '<img src="afbeeldingen/' .($row["Afbeelding"]) .'"width="100%">';
echo '<br><br>';
echo '<p>' .$row["Info"] .'</p>';
// echo '<br>';
echo '<p> De '  .$row["Naam"] .' leeft in ' .$row["Woonplaats"] .'</p>';



// $titel_van_blog = $_GET["blogtitel"];
?>