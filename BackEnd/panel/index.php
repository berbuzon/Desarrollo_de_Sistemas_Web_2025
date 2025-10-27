<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include("conexion.php");

        $tamaño_paginas = 5;
    if (isset($_GET['pagina'])) {
        if ($_GET['pagina'] == 1) {
            header("Location: index.php");
            exit();
        } else {
            $pagina = $_GET['pagina']; 
        }
    } else {
        $pagina = 1;
    }


    $empezardesde = ($pagina - 1) * $tamaño_paginas;

    $sql = "SELECT * FROM datos_usuarios";
    $resultado = $base->prepare("$sql");
    $resultado->execute(array());
    $numreg = $resultado->rowCount();

    $totalpaginas = ceil($numreg / $tamaño_paginas);

    echo "numero de registros de la consulta : " . $numreg . "<br>";
    echo "mostramos " . $tamaño_paginas . " paginas" . "<br>";
    echo "mostramos la pagina: " . $pagina . " de " . $totalpaginas . "<br>";

    $limit ="SELECT * FROM datos_usuarios LIMIT $empezardesde, $tamaño_paginas";
    // $registro = $base->query("SELECT * FROM datos_usuarios LIMIT $empezardesde, $tamaño_paginas")->fetchAll(PDO::FETCH_OBJ);

    $registro = $base->prepare($limit);
    $registro->execute(array());

    $sql = "SELECT * FROM datos_usuarios";
    $resultado = $base->prepare($sql);
    $resultado->execute(array());

    if (isset($_POST['crear'])) {
        $nombre = $_POST['nom'];
        $contrasenia = $_POST['pass'];
        $sql = "INSERT INTO datos_usuarios (usuarios, password) VALUES (:n_nom, :n_pass)";
        $resultado = $base->prepare($sql);
        $resultado->execute(array(":n_nom" => $nombre, ":n_pass" => $contrasenia));
        header("Location:index.php");
    }
    ?>

    <h1>Panel de administrador <span class="subtitulo">Create - Read - Update - Delete</span></h1>
    <!-- forma menos segura-->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <!-- <form action="index.php" method="post">  forma mas segura -->
        <table width="50%" border="2" align="center">
            <tr>
                <th>ID </th>
                <th>Usuario </th>
                <th>Contraseña </th>
                <th>Contra encriptada </th>
                <th>&nbsp</th>
                <th>&nbsp</th>
                <th>&nbsp</th>
            </tr>
            <?php
            foreach ($registro as $persona):
            ?>
                <tr>
                    <td><?php echo $persona['id_usuarios'] ?></td>
                    <td><?php echo $persona['usuarios'] ?></td>
                    <td><?php echo $persona['password'] ?></td>
                    <td><?php echo $persona['hash_password'] ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $persona['id_usuarios'] ?>& user=<?php echo $persona['usuarios'] ?>& pas=<?php echo $persona['password'] ?>& pasc=<?php echo $persona['hash_password'] ?>"> Modificar
                            <img src="./img/actualizar.png" width="20px" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="borrar.php?"id=<?php echo $persona['id_usuarios'] ?>"> Borrar
                            <img src="./img/papelera.png" width="20px" alt="">
                        </a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
            <tr>
                <td>
                    <input disabled type="text" name="id" value="">
                </td>
                <td>
                    <input type="text" name="nom" value="">
                </td>
                <td colspan="3">
                    <input readonly type="text" name="pass" value="">
                    <input type="submit" value="Guardar" name="crear">
                    <img src="./img/insertar.png" alt="">
                </td>
            </tr>
            <tr>
                <td colspan ="4">
                    <?php
                    for ($i = 1; $i <= $totalpaginas; $i++) {
                        echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
                    }
                    ?>

                </td>
            </tr>
        </table>
        <br>

        <?php

        ?>

    </form>
</body>

</html>