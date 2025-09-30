<?php
$idb = $_POST['id'];
include 'conn.php';
$sql = "DELETE FROM datos_usuarios WHERE id_usuarios = $idb";
if ($conn->query($sql) === true) {
    header("Location: ./select.php");
    echo "<a href='./form.php'>Regresar</a>"; ## este echo no se muestra por el header
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>