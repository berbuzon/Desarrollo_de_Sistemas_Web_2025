<?php

echo "<h1>Cookies</h1>";

setcookie(("prueba"), "holagrupo",time()+10);

echo $_COOKIE["prueba"];

setcookie("nombre", "Gabriela", time()+30);

echo $_COOKIE["prueba"]."<br>";
echo "hola : " . $_COOKIE["nombre"];

setcookie("apellido","Acri", time()+10 ,"php/crud");

echo "hola : " . $_COOKIE["apellido"] . "<br>";
echo "hola : " . $_COOKIE["apellido"] . "<br>";







?>