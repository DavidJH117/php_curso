<?php

$mes = 'Enero';

switch ($mes) { // Aqui va la variable a evaluar

  case 'Diciembre': // En estas secciones se deja escojer el mes y su accion
    echo "Estas en Diciembre";
    break; // Es importante poner break para parar los procesos y desplegarlos

  case 'Enero':
    echo "Estas en Enero";
    break;

  default: // Se pone si no existe un dato en la variable
    echo "No se encontro el mes";
    break;

}

?>
