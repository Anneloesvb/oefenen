<link rel="stylesheet" type="text/css" href="oefenstyle.css" />
<script> 


  function Klik(parameter){ // met deze functie wil ik dat zodra ik op een button klik er een nieuwe pagina genaamd: landendetails.php geopend word 
    // alert("Hoi"); 
    window.open("landendetails.php?id="+parameter, "_self"); //_self betekend op de pagina zelf openen
  } // de nieuwe pagina geef ik een (in dit geval) id mee omdat er meerdere onderwerp worden laten zien op 1 pagina / dus meerdere landen verschijnen op deze pagina


  function verwijderLand(landnummer){
    window.open("landverwijderen.php?landid="+landnummer, "_self"); //?landid= dit is een variabele / landnummer is een parameter met de waarde van het argument van onclick event

  }
    </script>
<?php

//Dit is de pagina waarop allerlei landen te zien zijn met korte informatie
$mysqli = new mysqli("localhost","root","","anneloes");
$sql = "SELECT * FROM landen";
$result = $mysqli -> query($sql);
while($row = $result -> fetch_assoc()){ 
  echo '<h1 class="Land">' .($row["Land"]) .'</h1>';
  echo '<img src="afbeeldingland/' .($row["Afbeelding"]) .'"width="100%">'; // let goed op de punt "' etc
  echo '<p class="info">' .($row["Informatie"]) .'</p>';
  echo '<h4 class-"Inwoners">' .($row["Inwoners"]) .'</h4>';
  echo '<button onclick="Klik('.$row["ID"].')" class="buttonland">LEES MEER</button>' ; //onclick event aangemaakt voor de functie in js bovenaan en als argument de ID van de database in SQL
  echo '<button onclick="verwijderLand('.$row["ID"].')">Verwijder land</button>';
  echo "\n"; // hiermee komt in de broncode (rechtermuis in browser, paginabron weergeven) de code netjes onder elkaar te staan
  echo '<hr>'; // dit is een lijn
}






?>

<a href="landenformulier.php">Land toevoegen</a>


