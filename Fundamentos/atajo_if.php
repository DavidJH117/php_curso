<?php

// isset(); Devuelve un true o false si una variable tiene un valor o no

$edad = 18;

$edad = (isset($edad)) ? $edad : 'El usuario no ingreso su edad';
//   (isset()) = evalua que hay en la variable edad
//   ? = Sería como un IF y se depsliga la accion (en este caso depsliega la edad)
//   : = es como un ELSE y si lo que esta en el signo ? no se cumple se ejecita la intruccion inidcada  

echo 'Edad ' . $edad;

?>
