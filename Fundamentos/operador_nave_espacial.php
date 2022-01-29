<?php
# Es una comparacion entre dos cosas

// Regresa 1 si el valor de la izquierda es mayor que el de la derecha
// Regresa 0 si los valores de ambos lados son iguales
// Regresa -1 si el valor de la derecha es mayor que el de la izquierda

// <   =   >
// 1   0  -1

echo 17<=> 1;
echo '<br>';
echo 17<=>17;
echo '<br>';
echo 1<=>17;
echo '<br>';

$arreglo = [1,5,23,7,3,9];

function comparar ($a, $b){ // Esta funcion hace lo mismo que un sort() que despliega todos los items de un arreglo en orden
  return $a <=> $b;
}
usort($arreglo, comparar); // Hace que el procedidmiento de la funcion comparar se aplique al arreglo

echo implode(' - ', $arreglo); // Despliega los elementos de arreglo mediante unos guiones
?>
