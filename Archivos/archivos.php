<?php

$resultado = file_exists('documento.txt'); // Comprueba si el documento existe

// if (file_exists('documento.txt')) { // Comprobar si existe el documento
//     echo 'El archivo si existe';
// } else {
//     echo 'El archivo no existe';
// }

echo file_get_contents('Documento.txt'); // Obtiene el contenido del archivo

// Agrega contenido al documento
file_put_contents('documento.txt', "Hello there \n", FILE_APPEND); // "Hello there" es el texto agregado, FILE_APEND agrega el nuevo contenido al final

file_put_contents('documento.txt', "");

for ($i=1; $i <=10 ; $i++) { 
    file_put_contents('documento.txt', "$i \n", FILE_APPEND);
}

// Convertir un archivo en un arreglo 
// Cada linea de documento es un elemento de un arreglo
$archivo = file('documento.txt');
echo $archivo[4]; // Se ingresa al renglon 5 del archivo