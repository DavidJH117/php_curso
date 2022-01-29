<?php

$juegos = array(
  'Halo', 'Gears of war', 'Assassins creed', 'Prince of persia',
  'Borderlands', 'Bioshock', 'PUBG', 'Stalker'
);

$alejandro = array('telefono' => 1234565432, 'edad' => 20, 'pais' => 'Mexico'); // Arreglo asociativo

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Meses</h1>
  <ul>
    <?php
      foreach ($juegos as $juego) { // Manera de llamar a un arrgelo informativo
        echo '<li>' . $juego . '</li>';
      }
    ?>
  </ul>
  <br>
  <h1>Datos</h1>
  <ul>
    <?php
      foreach($alejandro as $dato => $valor){ // Manera de llamar a los arreglos asociativos
        echo '<li>' . $dato . ': ' . $valor . '</li>';
        // foreach (){} Se puede agregar un foreach dentro de otro en caso de
        // que se tenga un arreglo dentro de otro
      }
    ?>
  </ul>
</body>
</html>
