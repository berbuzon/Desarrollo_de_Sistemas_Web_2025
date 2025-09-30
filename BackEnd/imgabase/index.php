<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
</head>

<body>
    <form action="interimagen.php" method="post" enctype="multipart/form-data">
        <label for="img">Subir imagen:</label>
        <input type="file" name="img" id="img" required>
        <input type="submit" value="Subir imagen">
    </form>
</body>

</html>