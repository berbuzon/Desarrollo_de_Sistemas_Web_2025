<?php
define('GREETING', 'Hello, World!',true);
echo GREETING;
echo "<br>";
echo greeting;



$car=array("Volvo","BMW","Toyota");
echo "I like " . $car[0] . ", " . $car[1] . " and " . $car[2] . ".";
echo "<br>";
$cadenaOriginal='<b>Hola Mundo</b>';
echo $cadenaOriginal;
echo "<br>";
$cadenaRetocada=htmlspecialchars($cadenaOriginal);
echo $cadenaRetocada;


function incrementaVariable(){
    $contador=0;
    $contador++;
    echo $contador . "<br>";
    return $contador;
}
for($i=0;$i<5;$i++){
    incrementaVariable();
}

// include('index.php');
// require('index.php');

$favcolor="red";

switch($favcolor){
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";
echo "Salí del switch";

echo "<br>";
for ($x=0; $x <=10 ; $x++) { 
    echo "El número es: $x <br>";
}

echo "Funciones";
echo "<br>";
function mostrar(){
    echo "Hola Mundo desde una función<br>";
}
mostrar();

function suma($a,$b){
    $resultado=$a+$b;
    return $resultado;
}
echo suma(1,2);

echo "<br>";
$numero1=40;
$numero2=20;
$resultado=suma($numero1,$numero2);
echo "La suma de $numero1 y $numero2 es: $resultado";

echo "<br>";
echo $resultado;
echo "<br>";
echo $resultado = $numero1 * $numero2;
echo "<br>";
function sumara($c,$d){
    $resultado=$c+$d;
    return $resultado;
}
echo sumara(5,5);
echo "<br>";

$frase = strtolower("HOLA MUNDO");
echo $frase;
echo "<br>";
$frase = strtoupper("hola mundo");
echo $frase;
echo "<br>";
$frase2 =ucwords("hola mundo");
echo $frase2;
echo "<br>";
$frase3 ="hola mundo";
echo str_replace("mundo","Carolina",$frase3);
echo "<br>";
echo str_replace("MUNDO","Carolina",$frase);
echo "<br>";
$frase4="http://localhost/ifts4/index.php";
$fraseArray=explode("/",$frase4);
print_r($fraseArray);

echo "<br>";
echo substr($frase4,-6,5);
echo "<br>";

?>