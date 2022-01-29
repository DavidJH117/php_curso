<?php

// comprueba si la cookie esta vigente y/o existe
if (isset($_COOKIE['font-size'])) {
    $tamaño = htmlspecialchars($_COOKIE['font-size']); // Se toman los valores de la cookie creada
} else {
    $tamaño = '15px';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <style>
        p {
            font-size: <?php echo $tamaño; ?>;
        }
    </style>
</head>
<body>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        Porro nam voluptatum, quis earum at odio iure fugit. Eius, 
        nesciunt perferendis rerum reprehenderit sunt dolor quis 
        minima numquam quas dolorem obcaecati.
    </p>
</body>
</html>