<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lectura</title>
</head>

<body>
    <?php
    include ('./navegacion.php');
    include 'conn.php';
    $consulta = "SELECT * FROM datos_usuarios";
    $resultado = $conn->query($consulta);
    if ($resultado->num_rows > 0) {
        echo "<br><br><table  border='2'>";
        echo "<tr>";
        echo "<th>Identicador</th>";
        echo "<th>Usuario</th>";
        echo "<th>Password</th>";
        echo "</tr>";
        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila[0] . "</td>";
            echo "<td>" . $fila[1] . "</td>";
            echo "<td>" . $fila[2] . "</td>";
            echo "</tr>";
        }
        echo "<tr > <td colspan='3'><button> <a href='form.php'> volver </a> </button> </td> </tr>  ";
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    include ('./footer.php');
    ?>
</body>

</html>