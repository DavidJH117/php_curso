<?php
# Una funcion devuelve valores del tipo indicado

declare(strict_types=1); // Modo estricto
function obtenerEdad() : int{ // : int indica que se devolvera estrictamente un entero
  $edad = 27;
  return $edad;
}

echo obtenerEdad();

?>
