<?php
$nombre = $_FILES['img']['name'];
$tipo = $_FILES['img']['type'];
$tamanio = $_FILES['img']['size'];

if ($tamanio <= 1000000) {
    if ($tipo == "image/jpeg" || $tipo == "image/jpg" || $tipo == "image/png" || $tipo == "image/gif") {
        require("conexion.php");
        $conexion = mysqli_connect($host, $user, $pass, $db, $port);
        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la BBDD";
            exit();
        }
        mysqli_select_db($conexion, $db) or die("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");

        $archivo_temp = fopen($_FILES['img']['tmp_name'], "r");

        $contenido = fread($archivo_temp, $tamanio);

        $contenido = addslashes($contenido);

        fclose($archivo_temp);

        $consulta = "INSERT INTO imagen (ID, NOMBRE, TIPO, CONTENIDO) VALUES (null, '$nombre', '$tipo', '$contenido')";

        $resultado = mysqli_query($conexion, $consulta);

        if (mysqli_affected_rows($conexion) > 0) {
            echo "Imagen subida correctamente";
        } else {
            echo "Error al subir la imagen";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Volver al inicio</a>
   <button> <a href="leeimagenes.php">Mostrar las imagenes</a> </button>
</body>
</html>
