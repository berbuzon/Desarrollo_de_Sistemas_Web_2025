<?php
$idup = $_POST['id'];
$userup = $_POST['user'];
$pasup = $_POST['pas'];

include 'conn.php';
// Update data in the database
$sql = "UPDATE datos_usuarios SET usuarios='$userup', password='$pasup' WHERE id_usuarios='$idup'";

if ($conn->query($sql) === true) {
    echo "Record updated successfully";
} else {
    echo "Error updating record ";
}

$conn->close();
header("Location: ./select.php");
exit();
