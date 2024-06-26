<link rel="stylesheet" type="text/css" href="oefenstyle.css" />
<div class="blok">
  <h1 class="naam">Leeuw</h1>
  <img src="afbeeldingen/leeuw.jpg" width="100%">
  <p class="Info">Afrikaanse leeuwen leven in het grootste gedeelte van de sub-Sahara van Afrika, in open landschappen met gras. Ooit werden leeuwen uitgeroeid vanuit Zuid-Afrika. Daarom leven ze daar nu in nationale parken zoals het Kruger National Park en Kalahari Gemsbok National Park, waar ze zo goed mogelijk beschermd zijn. Vroeger kwamen leeuwen voor tussen Zuidwest-Azië en Noord-Afrika.</p>
  <p class="Woonplaats">Afrika</p>
  <button class="knop">LEES MEER</button>
</div>
<hr>
<?php

// ++ is plus 1 / + is erbij / . punt is aan elkaar plakken
// voorbeeld code:
// $i = 4;
// $y= $i++;
// echo "<h2>mijn favo getal is" .($y) .($i+4)."</h2>";


// forloop in PHP / om niet elke keer echo te gebruiken kun je bakcticks op <<< EIGENWOORD gebruiken (zie hieronder)

// for($q =0; $q < 10; $q++){
//   echo "<br><h2>- Dit is een blog</h2><br>";
//   echo "<h3>Subtitel</h3><br>";
//   echo "<p>Tekst van de blog</p><br>";
//   echo "<button> lees meer</button>";

// }

// for($q =0; $q < 10; $q++){
//   echo '
//    <br><h2>- Dit is een blog</h2><br>
//    <h3>Subtitel</h3><br>
//    <p>Tekst van de blog</p><br>
//    <button> lees meer</button>
//    ';
// }

// for($q =0; $q < 10; $q++){
//   echo <<< EIGENWOORD
//    <br><h2>- Dit is een blog</h2><br>
//    <h3>Subtitel</h3><br>
//    <p>Tekst van de blog</p><br>
//    <button> lees meer</button>
//    EIGENWOORD;
// }

// php connecten met sql
$mysqli = new mysqli("localhost","root","","anneloes");
$sql = "SELECT * FROM dieren";
$result = $mysqli -> query($sql); // t/m hier is de code die je nodig hebt om php te connecten met sql. Verander wel de database naam, de table naam etc. (in dit geval: root / anneloes en dieren)
while($row = $result -> fetch_assoc()){ 
  echo '<div class="blok"><h1 class="naam">HET DIER: de ' .($row["Naam"]) .':</h1>';
                              // <h1 class="naam">Leeuw</h1>
  echo '<img src="afbeeldingen/'.($row["Afbeelding"]) .'" width="100%">';

  
  echo '<p class="Info">' .($row["Info"]) .'</p>';
  echo '<p class="Woonplaats">' .($row["Woonplaats"]) .'</p>';
  echo '<button class="knop">LEES MEER</button></div>';
  echo "\n"; // (de broncode komt hierdoor netjes onder elkaar )
    // Voorbeeld echo in 1 zin: echo "<h1>" .($row["title"]) ."<br>" .($row["inhoud"]) ."<br>" .($row["publiceerdatum"])."</h1>";
    // Ander echo voorbeeld 
    // echo <<< EIGENWOORD
    // $naamdier=$row["Naam"];
    // echo <<< DIEREN
    // <h1 class="naam"> $naamdier </h1>
    // DIEREN;
    
    
  }
?>

<a href="dierenformulier.php">Terug</a>
