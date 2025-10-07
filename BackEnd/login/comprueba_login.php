<?php

try {
    $usuario = $_POST['usu'];
    $contra = $_POST['contra'];

    if ($usuario == "admin" && $contra == "1234") {
        echo "Ingreso exitoso. Bienvenido, " . htmlspecialchars($usuario) . "!";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}


?>