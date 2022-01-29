<?php

// Metodo para validar el tipo de envio (Forma 1)

// if ($_SERVER['REQUEST_METHOD'] == 'GET'){
//     echo 'Se enviaron por GET';
// } else {
//     echo 'Se enviaron por post';
// }

// Forma 2 (La mas recomendable)

if (isset($_POST['submit'])) {
    echo "Se han enviado los datos corretamente";
    print_r($_POST['submit']);
}
