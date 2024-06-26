<?php
$titel_van_blog = $_GET["blogtitel"]; // dit $titel_van_blog is een variabele die ik zelf bedacht hebt en blogtitel komt uit bestand oefenformulier.php (de input die ik ophaal
$inhoud_van_blog = $_GET["bloginhoud"];

echo "hij doet het";
echo $titel_van_blog; // hier toon ik de input van $titel_van_blog op 
echo $inhoud_van_blog;

$mysqli = new mysqli("localhost","root","","anneloes");
$sql = "INSERT INTO dieren (Naam, Info)  VALUES ('$titel_van_blog', '$inhoud_van_blog')";
$result = $mysqli -> query($sql); 
// en met deze code insert ik ingevoerde input naar de database
// dus zodra de input velden word ingevuld (ik maak een blog op de pagina oefenformulier), wordt dit doorgestuurd naar de database in sql 
// en daar zorgt de code hierboven voor, insert betekent toevoegen in sql


?>

<a href="dierenformulier.php">Terug</a>
<a href="oefendoc.php">Overzicht</a>
<!-- deze links voeg ik toe zodat ik makkelijk kan switchen tussen de 3 pagina's 
 oefendoc.php / oefenformulier.php / blogaanmaken.php -->
