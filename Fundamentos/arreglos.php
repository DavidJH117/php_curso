<?php

# Forma de declarar un arreglo
$semanas = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

#Forma dos de declara un arreglo
$juegos = ['Halo', 'Gears', 'Ac'];

#Tipos de datos que se pueden guardar en un arreglo;
$arreglo = ['cadenas de texto', 1, array('asd',6), true];

#Forma de agregar un elemento a un arreglo
$semanas[7] = 'Star Wars';

#Forma de llamar a un elemento de un arreglo
echo $juegos[1] . '<br />'; // Salto de liena el cual se insertará como html en el navegador
echo $semanas[7] . '<br />';

#Forma de acceder a todos los elmentos de un arreglo
echo $semanas[0] . '<br />';
echo $semanas[1] . '<br />';
echo $semanas[2] . '<br />';
echo $semanas[3] . '<br />';
echo $semanas[4] . '<br />';
echo $semanas[5] . '<br />';
echo $semanas[6] . '<br />';

?>
