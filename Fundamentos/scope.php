<?php
# Cuando se quiera trabajar con variables que estan fuera de una funcion
// primero se tienen que pasar como parametros para que funcione

$numero = 7;

function mostrarNumero(){
  echo $numero;
}

mostrarNumero($numero);

# Las funciones no pueden acceder a las variables que esten fuera de la funcion
// y desde afuera de una funcion no se puede acceder a las variables de una funcion

?>
