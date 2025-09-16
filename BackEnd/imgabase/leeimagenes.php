<?php
require("conexion.php");

$conexion = mysqli_connect($host, $user, $pass, $db, $port);
mysqli_select_db($conexion, $db) or die("No se encuentra la BBDD");
mysqli_set_charset($conexion, "utf8");

$consulta = "SELECT * FROM imagen";
$resultado = mysqli_query($conexion, $consulta);

while ($fila = mysqli_fetch_array($resultado)) {
    $id = $fila["ID"];
    $nombre = $fila["NOMBRE"];
    $contenido = $fila["CONTENIDO"];
    $tipo = $fila["TIPO"];

    echo "El id es: " . $id . "<br>";
    echo "El nombre es: " . $nombre . "<br>";
    echo "El tipo es: " . $tipo . "<br>";
    echo "<img src='data:$tipo;base64," . base64_encode($contenido) . "' alt='$nombre' width='200'><br><hr>";
}
?>
