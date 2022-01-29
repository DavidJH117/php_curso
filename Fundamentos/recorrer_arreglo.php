<?php

# Ciclo Foreach

# Primero se define el arreglo
$meses = array(
  'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
  'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',
  'Diciembre'
);

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
  <h1>Recorrer arreglos</h1>
  <ul>
    <?php

      foreach($meses as $mes){ // Como parametro se pone el arreglo junto a como se dividira cada uno

        echo '<li>' . $mes . '</li>';
      }
    ?>
  </ul>
</body>
</html>
