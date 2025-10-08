<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Modificar datos</h1>
    <?php
    include("conexion.php");

    if (!isset($_POST["bot_act"])) {

        $id = $_GET['id'];
        $nom = $_GET['user'];
        $pass = $_GET['pas'];
        $pcifrada = $_GET['pasc'];
    } else {
        $id = $_POST['id'];
        $nom = $_POST['user'];
        $pass = $_POST['pas'];
        $pcifrada = $_POST['pasc'];

        $sql = "UPDATE datos_usuarios SET usuarios=:n_us, password=:n_p, hash_password=:n_pc WHERE id_usuarios=:n_id";
        $resultado = $base->prepare($sql);
        $resultado->execute(array(":n_id" => $id, ":n_us" => $nom, ":n_p" => $pass, ":n_pc" => $pcifrada));
        header("Location:index.php");
    }
    ?>

    <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
    <table border="1" align="center">
        <tr>
            <td>
                <label for="id">ID</label>
            </td>
            <td>
                <input type="text" name="id" value="<?php echo $id ?>" readonly>
            </td>
        </tr>
        <tr>
            <td>
                <label for="user">Usuario</label>
            </td>
            <td>
                <input type="text" name="user" value="<?php echo $nom ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="pas">Password</label>
            </td>
            <td>
                <input type="text" name="pas" value="<?php echo $pass ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="pasc">Password cifrado</label>
            </td>
            <td>
                <input type="text" name="pasc" value="<?php echo $pcifrada ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="bot_act" value="Modificar">
                <input type="button" name="volver" value="Volver" onclick="location.href='index.php'">
            </td>
        </tr>
    </table>
    </form>
</body>

</html>