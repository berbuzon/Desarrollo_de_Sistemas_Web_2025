
<?php

//  Código Antiguo (PHP 4)
class Car {
    // 1. Constructor con el MISMO nombre que la clase
    function Car() {
        $this->model = "VW";
    }
    
    // 2. Declaración con 'var' (obsoleto)
    var $model;

}

//  Código Moderno (PHP 5+)
class Auto {
    // 1. Constructor con nombre especial __construct
    public function __construct() {
        $this->model = "VW";
    }
    
    // 2. Declaración explícita con modificadores de acceso
    public $model;
}

//  Instanciar un objeto
$car = new Car();
$auto = new Auto();

//  Acceder a sus propiedades
echo $car->model . "<br>";
echo $auto->model . "<br>";

?>

