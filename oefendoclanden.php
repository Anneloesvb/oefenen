<link rel="stylesheet" type="text/css" href="oefenstyle.css" />
<script>

  function Klik(parameter){
    alert("Hoi"); 
    window.open("landendetails.php?id="+parameter, "_self"); //_self betekend op de pagina zelf openen
  }

    </script>
<?php

$mysqli = new mysqli("localhost","root","","anneloes");
$sql = "SELECT * FROM landen";
$result = $mysqli -> query($sql);
while($row = $result -> fetch_assoc()){ 
  echo '<h1 class="Land">' .($row["Land"]) .'</h1>';
  echo '<img src="afbeeldingland/' .($row["Afbeelding"]) .'"width="100%">';
  // echo '<img src="afbeeldingen/'.($row["Afbeelding"]) .'" width="100%">';

  echo '<p class="info">' .($row["Informatie"]) .'</p>';
  echo '<h4 class-"Inwoners">' .($row["Aantal inwoners"]) .'</h4>';
  echo '<button onclick="Klik('.$row["ID"].')" class="buttonland">LEES MEER</button>' ; 
  echo "\n";
  echo '<hr>';
}




?>

