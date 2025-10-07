<?php

$host = "localhost:3307";
$db = "usuarios";
$user = "root";
$pas = "";

try {
    //$base = new PDO("mysql:host=localhost:3307; dbname=usuarios;", "root", "");
    $base = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';', $user, $pas);
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $base->exec("SET CHARACTER SET utf8");
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
    echo "Linea del error: " . $e->getLine();
}
?>