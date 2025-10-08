<?php
include("conexion.php");
$id = $_GET['id'];
// $base->query("DELETE FROM datos_usuarios WHERE id_usuarios=$id");
$sql = "DELETE FROM datos_usuarios WHERE id_usuarios=:n_id";
$resultado = $base->prepare($sql);
$resultado->execute(array(":n_id" => $id));
header("Location:index.php");
?>
