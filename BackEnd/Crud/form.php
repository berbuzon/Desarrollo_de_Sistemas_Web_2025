<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario POST</title>
</head>
<body>

<?php
$mensaje = "Formulario con POST para llamar a insert.php";
?>

<h1><?php echo $mensaje; ?></h1>

<form action="insert.php" method="post">
    <label for="id">ID:</label>
    <input type="text" name="id" id="id"><br><br>

    <label for="user">Usuario:</label>
    <input type="text" name="user" id="user"><br><br>

    <label for="pas">Password:</label>
    <input type="text" name="pas" id="pas"><br><br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>