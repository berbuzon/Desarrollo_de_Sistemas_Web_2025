<?php
$id = $_POST['id'];
$user = $_POST['user'];
$pas = $_POST['pas'];

require 'conn.php';

// Insert data into the database
$sql = "INSERT INTO datos_usuarios (id_usuarios, usuarios, password) VALUES ('$id', '$user', '$pas')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo "<br><a href='./form.php'>Regresar</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>