<?php

# Instrucciones para conocer el numero de elementos de un arreglo

$meses = array(
  'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
  'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',
  'Diciembre'
);

echo count($meses) . '<br>'; // Count cuenta los elementos de los arreglos

# Para saber el ultimo dato de un arreglo

$ultimo_mes = count($meses) - 1;
$meses[$ultimo_mes];


?>
