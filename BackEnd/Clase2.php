
<?php

//  Código Antiguo (PHP 4)
class Auto1 {
    // 1. Constructor con el MISMO nombre que la clase
    function Auto1() {
        $this->model = "Modelo Auto 1";
    }
    
    // 2. Declaración con 'var' (obsoleto)
    var $model;

}

//  Código Moderno (PHP 5+)
class Auto2 {
    // 1. Constructor con nombre especial __construct
    public function __construct() {
        $this->model = "Modelo Auto 2";
    }
    
    // 2. Declaración explícita con modificadores de acceso
    public $model;
}

//  Instanciar un objeto
$variableAuto1 = new Auto1();
$variableAuto2 = new Auto2();

//  Acceder a sus propiedades
echo $variableAuto1->model . "<br>";
echo $variableAuto2->model . "<br>";

// Concatenar cadenas
$Cad1 = "Hoy ";
$Cad2 = "es ";
$Cad3 = "31 ";
$Cad4 = "Marzo";
$Cad5 = $Cad1 . $Cad2 . $Cad3 . $Cad4;
echo $Cad5;

// string
$x = "Hola Clase";
$y = "Hola estudiantes!";

echo $x;
echo "<br>";
echo $y;

echo "<br>";

$txt1 ="Hola ";
$txt2 = "Futuros desarrolladores!";
echo $txt1 . $txt2;

echo "<br>";
// dump informa el tipo de variable
$x = 5985;
var_dump($x);

echo "<br>";
$x = 10.365;
var_dump($x);

echo "<br>";
$x = 20;
$x +=100;
echo $x;
// salida 120

echo "<br>";
$x = 10;
echo ++$x; // salida 11

// Declaraciones de echo y print de PHP
// echo no tiene valor de retorno
// print tiene valor de retorno

$txt1 = "Learn PHP";
$txt2 = "Tercero";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Estudiante PHP at " . $txt2 . "<br>";
print $x + $y;

echo "<br>";
$x = "Hello World!";
$y = 'Hello World!';
echo $x;
echo "<br>";
echo $y;

echo "<br>";
$x = true;
$y = false;
echo $x;
echo "<br>";
echo $y; // no se imprime porque es falso
echo "0 es falso y 1 es verdadero";
echo "<br>";
echo "echo \$y no se imprime porque es falso";

// Crear una constante con define()
// define(name, value, case-insensitive)
// case-insensitive se eliminó en PHP 8
// ahora todo es case-sensitive

echo "<br>";
define ("GREETING", "Hola Grupo!");
echo GREETING . "<br>";
?>

