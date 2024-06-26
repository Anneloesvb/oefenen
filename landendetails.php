<?php
// dit is de pagina voor alle landen / alle landen worden getoond op 1 pagina via deze pagina
$detailOefendocLanden = $_GET["id"]; //$detailOefendocLanden is een variabele die ik heb aangemaakt. _GET["id"] haal ik uit docuemnt oefendoclanden.php in de window.open ?id=

echo $detailOefendocLanden;

$mysqli = new mysqli("localhost","root","","anneloes");
$sql = "SELECT * FROM landen where ID=".$detailOefendocLanden;
$result = $mysqli -> query($sql);
$row = $result -> fetch_assoc();
echo '<h1>' .$row["Land"] .'</h1>';
echo '<img src="afbeeldingland/' .($row["Afbeelding"]) .'"width="100%">';
echo '<br><br>';
echo '<p>' .$row["Informatie"] .'</p>';
// echo '<br>';
echo '<p>' .$row["Land"] .' heeft ' .$row["Inwoners"] .' inwoners' .'</p>';



// $titel_van_blog = $_GET["blogtitel"];
?>