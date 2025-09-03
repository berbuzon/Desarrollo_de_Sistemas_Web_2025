<?php
$id = $_POST['id'];
$user = $_POST['user'];
$pas = $_POST['pas'];

require 'conn.php';

// Corregir nombres de tabla y columnas para que coincidan con la base de datos
$sql = "INSERT INTO datos_usuarios (id_usuarios, usuarios, password) VALUES ('$id', '$user', '$pas')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>