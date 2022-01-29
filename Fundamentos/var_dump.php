<?php
# Permite conocer el valor de nuestras variables y los depsleiga en pantalla para que sea legible para nosotros

$texto = 'Dante';
$numero = 7;
$numero2 = '17';
$arreglo = array('Amicia', 'Lucas', 'Hugo');
$arreglo_asociativo = array('nombre' => 'Santiago', 'Edad' => 22);
$booleano = false;

var_dump($texto);
echo "<br>";

var_dump($numero);
echo "<br>";

var_dump($numero2);
echo "<br>";

echo "<pre>"; // Etiqueta de html para acomodar mejor la informacion de los arreglos
var_dump($arreglo);
echo "</pre>";
echo "<br>";

echo "<pre>";
var_dump($arreglo_asociativo);
echo "</pre>";
echo "<br>";

var_dump($booleano);
?>
