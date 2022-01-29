<?php

# Funcion que permite concocer los tipos de datos de una variable

$texto = 'Dante';
$numero = 7;
$numero2 = '17';
$arreglo = array('Amicia', 'Lucas', 'Hugo');
$arreglo_asociativo = array('nombre' => 'Santiago', 'Edad' => 22);
$booleano = true; // Si este valor es false no muestra nada en pantalla

print_r($texto);
echo "<br>";

print_r($numero);
echo "<br>";

print_r($numero2);
echo "<br>";

echo "<pre>"; // Etiqueta html para mostrar mejor la informacion del arreglo
print_r($arreglo);
echo "</pre>";
echo "<br>";

echo "<pre>";
print_r($arreglo_asociativo);
echo "</pre>";
echo "<br>";

print_r($booleano);


?>
