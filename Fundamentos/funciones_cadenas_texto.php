<?php
# Funciones aplicadas a cadenas de texto

# strpos() = Despliga la posicion de una letra.
# strtolower() = Convierte una cadena de texto en minusculas.
# strtoupper() = Convierte una cadena de texto en mayusculas
# substr() = Retorna un pedazo de una cadena de texto.
# strlen() = Calcula el tamaño de una cadena de texto.
# trim() = Elimina espacios inecesarios de un texto.
# htmlspecialchars() = Convierte entidades especiales en cadenas html.
// Ayuda a la seguridad de la pagina para que no la modifiquen.

$texto = '<b>Hola</b>';
echo htmlspecialchars($texto);

echo '<br>';

$texto2 = 'Hello there';
echo substr($texto2, 1, 2); // El 1 indica desde donde iniciará el return y el 2 cuantos caracteres de regresarán

echo '<br>';

$texto3 = 'Gears of war';
echo strpos($texto3, 'f'); // La 'f' es la letra a encontrar



?>
