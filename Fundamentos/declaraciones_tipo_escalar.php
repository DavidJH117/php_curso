<?php
# Las declaraciones de tipo escalar validan los tipos de datos que son introducidos a una función

declare(strict_types=1); // Activa el modo esctricto de php (a las funciones en este caso solo entran numeros, no numeros procedentes de chars)
function cuadrado(int $numero){ // Con ese int se dice que a la funcion solo entraran datos de tipo int
  return $numero * $numero;
}

$numero = 2; // Si se pone un char en lugar de un numero mandará error
// $numero = '4'; // PHP ahora puede comvertir a int numeros que estan en las cadenas de texto
echo 'El cuadrado de: '. $numero . ' es: ' . cuadrado($numero);

?>
