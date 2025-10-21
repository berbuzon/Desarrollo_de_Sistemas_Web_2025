<?php
// inicio de sesion
session_start();  //la dejo true, por default está en False

// en el hosting el session start por default está en true

// $_SESSION["usuario"] = $_POST["user"];
$_SESSION["usuario"] = "mary";


// al principio de cada pagina que use sesiones se debe iniciar la sesion

session_start(); // reanuda la sesion existente


if(!isset($_SESSION["usuario"])){
    header ("Location: login.php");
}else{
    echo "<h2>Bienvenido " . $_SESSION["usuario"] . "</h2>";
}

// cierre de sesion

session_start();
session_destroy();
// header ("Location: login.php");

?>