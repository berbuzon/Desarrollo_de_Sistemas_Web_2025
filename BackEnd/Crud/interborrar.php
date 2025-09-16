<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'conn.php';
    $iddel = $_POST['id'];
    $sql = "SELECT * from datos_usuarios where id_usuarios='$iddel'";
    $resultado = $conn->query($sql);
    if ($resultado->num_rows > 0) {
        $row = mysqli_fetch_array($resultado);
        $idborrar = $row[0];
        $user = $row[1];
        $pas = $row[2];
    ?>
        <h1>Formulario para borrar datos</h1>
        <form action="borrar.php" method="post">
            <input type="text" name="id" id="id" value="<?php echo $idborrar; ?>" readonly> Lo invisibilizo <input type="hidden" name="id" id="id" value="<?php echo $idborrar; ?>">
            <br>
            <br>
            <label for="user">Usuario:</label>
            <input type="text" name="user" id="user" value="<?php echo $user; ?>">
            <br>
            <br>
            <label for="pas">Password:</label>
            <input type="text" name="pas" id="pas" value="<?php echo $pas; ?>">
            <br>
            <br>
            <input type="submit" value="Enviar">
        </form>


    <?php
    } else {
        echo "No existe el id";
    }
    ?>
</body>

</html>