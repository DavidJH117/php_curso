<?php

# Funcion Sort

# Primero se define el arreglo
$meses = array(
  'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
  'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',
  'Diciembre'
);

sort($meses); // Funcion encargada de ordenar los arreglos

$numeros = array(0, 2, 3, 6, 5, 22, 7, 8, 32, 10);
rsort($numeros);

# rsort($meses); Del ingles Reverse Sort ordena los elementos de manera inversa

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Meses del año</title>
</head>
<body>
  <h1>Mese del año</h1>
  <ul>
    <?php
      foreach($meses as $mes){
        echo '<li>' . $mes . '</li>';
      }
    ?>
  </ul>
  <br>
  <h1>Numeros</h1>
  <ul>
    <?php
      foreach ($numeros as $numero) {
        echo '<li>' . $numero . '</li>';
    }
    ?>
  </ul>
</body>
</html>
