<?php

	# String: Cadena de texto
	$nombre = "David";

	# Integer: Números enteros
	$numero = 7;

	# Double: Números decimales
	$numero_decimal = 7.7;

	# Boolean: Verdadero o falso
	$verdadero = true;
	$falso = false;

	# Array: Arreglo
	# Object: Objeto
	# Class: Clase
	# Null: No se ha asignado un valor a la variable

	echo "Hola, $nombre"; // Es importante usar comillas dobles en los echos para poder
						  // llamar a las variables

	echo 'Hello, ' . $nombre; // Concatenación es con un: . (Es la forma recomendada)


	#Conocer el tipo de dato de una variable
	echo gettype($nombre); // gettype trae el tipo de dato de una variable


?>