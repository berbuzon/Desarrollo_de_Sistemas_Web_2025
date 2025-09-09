<?php
$dato = $_POST['id'];
include 'conn.php';
$sql = "SELECT * FROM datos_usuarios WHERE id_usuarios = $dato";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $fila = mysqli_fetch_array($resultado);
    $id = $fila[0];
    $user = $fila[1];
    $pas = $fila[2];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>formulario para modificar datos</h1>
        <form action="modifica.php" method="post">
        <label for="id">Identificador de la fila:</label>
        <input type="text" name="id" id="id" value="<?php echo $id; ?>" readonly>
        <!-- Lo invisibilizo <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"> -->
        <br>
        <br>
        <label for="user">Usuario:</label>
        <input type="text" name="user" id="user" value="<?php echo $user; ?>">
        <br>
        <label for="pas">Password:</label>
        <input type="text" name="pas" id="pas" value="<?php echo $pas; ?>">
        <br>
        <input type="submit" value="modificar">
        <br>
        
        </form>
<a href="./form.php">Regresar</a>
    
</body>
</html>