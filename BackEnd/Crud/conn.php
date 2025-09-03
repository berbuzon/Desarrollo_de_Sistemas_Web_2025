<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "usuarios";
$port = 3307; // Puerto por defecto de MariaDB en XAMPP

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>