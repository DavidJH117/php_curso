<?php

function suma($numero1, $numero2){
  $resultado = $numero1 + $numero2;
  return $resultado;
  // Es mas recomendado usar return que echo ya que echo siempre pondra todo hasta arriba sin respetar el diseño de una pagina
}

$resultado = suma(20, 25); // El valor que devuelve el return se almacenará en la variable $resultado

# Manera correcta de mostrar la información de una función
function saludo($nombre){
  return 'Hola ' . $nombre;
}

echo saludo('Amicia') . '<br>';

?>
