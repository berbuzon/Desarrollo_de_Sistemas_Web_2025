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
?>