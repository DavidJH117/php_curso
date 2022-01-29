<?php

# Breack = Corta la ejecucion del ciclo
# Continue = Omite un elemento del ciclo

$juegos = array(
  "Halo", "Gears of war", "Assassins creed",
  "PUBG", "Bioshock", "Borderlands"
);

foreach ($juegos as $juego) {
  echo $juego . "<br>";

  if ($juego == "Gears of war") { // Al momemnto de encontrar el juego Gears of war el ciclo parará solo depslegando los itemas antes de dicho juego
    break; // Corta toda la ejecucion del ciclo y la saca
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Break and Continue</title>
</head>
<body>
  <h1>Shooters</h1>
  <?php
    foreach ($juegos as $juego) {
      if ($juego == "Assassins creed") {
        continue; // Si el elemento encontrado es Assassins Creed el continue lo quita de la lista
      }
      echo $juego . "<br>";
    }
  ?>
</body>
</html>
