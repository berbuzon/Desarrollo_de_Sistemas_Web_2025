<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ingreso al sistema</h1>
    <form action="comprueba_login.php" method="post"></form>
    <table>
        <tr>
            <td>Usuario:</td>
            <td><input type="text" name="usu" id="usuario"></td>
        </tr>
        <tr>
            <td>Contraseña:</td>
            <td><input type="password" name="contra" id="pass"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Ingresar"></td>
        </tr>
    </table>
</body>

</html>