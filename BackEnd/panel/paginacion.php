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
            header("Location: paginacion.php");
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


    $registro = $base->query("SELECT * FROM datos_usuarios LIMIT $empezardesde, $tamaño_paginas")->fetchAll(PDO::FETCH_OBJ);

    ?>

    <table>
        <tr>
            <td>
                <?php
                for ($i = 1; $i <= $totalpaginas; $i++) {
                    echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
                }
                ?>
            </td>
        </tr>
    </table>
</body>

</html>