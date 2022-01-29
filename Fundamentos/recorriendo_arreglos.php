<?php

$meses = array(
  'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
  'Junio', 'Julio', 'Agosto', 'Septiembre',
  'Octubre', 'Noviembre', 'Diciembre'
);

// echo count($meses); Comprueba el numero de elementos del arreglo

for ($i=0; $i < count($meses); $i++) { // count dentro del ciclo cuenta el numero de items dentro del arreglo para asi evitar estar poniendo ese rango manualmente
  echo $meses[$i] . '<br>'; // Despliega todos los meses
}


$contador = 0;

$juegos = array(
  'Halo', 'Gears of War', 'Assassins Creed',
  'Call of Duty', 'Borderlands', 'Bioshock',
  'Prince of Persia', 'PUBG'
);

while ($contador < count($juegos)) {
  echo $juegos[$contador] . '<br>';
  $contador++; // El contador siempre tiene que ir aqui, de lo contrario crasheará todod
}


?>
