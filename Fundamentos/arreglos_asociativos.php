<?php

# Un arreglo asociativo contiene elementos con datos propios del campo

$alex = array('telefono' => '77885960', 'edad' => 17, 'apellido' => 'Urbina', 'pais' => 'Mexico');

# Forma de acceder a los datos de este tipo de arreglos
echo $alex['apellido'] . '<br />';
echo $alex['edad'] . '<br />';
echo $alex['telefono'] . '<br />';
echo $alex['pais'] . '<br />';

# Para modificar un dato del arreglo se tiene que poner lo siguente
$alex['telefono'] = '1111111';
echo 'El telefono de alex es: ' . $alex['telefono'];

?>
