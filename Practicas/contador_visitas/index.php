<?php

function contar_usuarios()
{
    $archivo = 'contador.txt'; // Se agrega el archivo a una variable

    if (file_exists($archivo)) { // Si existe el archivo 

        $cuenta = file_get_contents($archivo) + 1; // Obtiene los datos del archivo
        file_put_contents($archivo, $cuenta); // Sobre escribe los datos del archivo 

        return $cuenta; // Retorna la cuenta

    } else { // Si el archivo no existe

        file_put_contents($archivo, 1); // crea el archivo y lo inicializa en 1
        return 1; // retorna el 1
    }
}

// contar_usuarios(); Si no se comenta esta funcion el contador irá de 2 en 2

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Contador de visitas</title>
</head>

<body>
    <h1>Contador de visitas</h1>
    <div class="visitantes">
        <p class="numero"><?php echo contar_usuarios(); ?></p>
        <p class="texto">Visitas</p>
    </div>
</body>

</html>