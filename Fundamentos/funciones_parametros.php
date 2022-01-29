<?php

function saludo($nombre){ // 2) En esta seccion se recibe el nombre
  echo 'Saludos: ' . $nombre; // 3) En esta sección se acopla el nombre recibido al saludo
  echo '<br>';
}

saludo('Amicia'); // 1) En esta seccion se pone el nombre a desplegar
saludo('Dante');
saludo('Santiago');

function suma ($numero1, $numero2){
  $resultado = $numero1 + $numero2;
  echo $resultado;
  echo '<br>';
}

suma(2,7);
suma(20, 25);
suma(10, 30);

?>
