<?php
echo "Se desea calcular la cantidad de pintura necesaria para pintar un departamento.<br>";
echo "a. Para esto se deberá realizar un programa que permita realizar el cálculo.<br>";
echo "i. Cantidad de ambientes del departamento o casa (1, 2, 3 o 4 ambientes).<br>";
echo "ii. Para cada ambiente el largo y ancho expresado en metros. Suponer: Que no<br>";
echo "se pintan el baño, lavadero ni cocina. (para simplificar).<br>";
echo "iii. Altura de todos los techos es: 2,5 metros. Se utiliza el mismo color de pintura<br>";
echo "para todas las habitaciones. El rendimiento de la pintura es de 8.5m2 /litro.<br>";
echo "Se realizan dos manos de pintura.<br>";
echo "iv. El programa debe indicar la totalidad de metros cuadrados a pintar. Cantidad<br>";
echo "de litros de pintura que hay que comprar. Para desarrollar el programa, divida<br>";
echo "en funciones las diferentes tareas. Algunas podrían ser:<br>";
echo "ingresoCantidadHabitaciones(); ingresoMedidasHabitacion();<br>";
echo "calculoMetrosHabitacion(ancho, largo, alto);<br>";
echo "calculoLitrosPintura(metrosTotales); exhibirResultados(aaa, bbb, ccc);<br>";
echo "Codifique cada una de las funciones.<br><br>";

// Función para ingresar la cantidad de habitaciones
function ingresoCantidadHabitaciones() {
    echo "Ingrese la cantidad de ambientes (1, 2, 3 o 4): ";
    $cantidad = trim(fgets(STDIN));
    
    // Validar que la cantidad sea un número entre 1 y 4
    while (!is_numeric($cantidad) || $cantidad < 1 || $cantidad > 4) {
        echo "Por favor, ingrese un número válido entre 1 y 4: ";
        $cantidad = trim(fgets(STDIN));
    }
    
    return (int)$cantidad;
}

// Función para ingresar las medidas de una habitación
function ingresoMedidasHabitacion($numeroHabitacion) {
    echo "<br>Medidas para la habitación $numeroHabitacion:<br>";
    
    // Ingresar largo
    echo "Largo (metros): ";
    $largo = trim(fgets(STDIN));
    while (!is_numeric($largo) || $largo <= 0) {
        echo "Por favor, ingrese un número válido mayor a 0: ";
        $largo = trim(fgets(STDIN));
    }
    
    // Ingresar ancho
    echo "Ancho (metros): ";
    $ancho = trim(fgets(STDIN));
    while (!is_numeric($ancho) || $ancho <= 0) {
        echo "Por favor, ingrese un número válido mayor a 0: ";
        $ancho = trim(fgets(STDIN));
    }
    
    return [(float)$largo, (float)$ancho];
}

// Función para calcular los metros cuadrados de una habitación
function calculoMetrosHabitacion($ancho, $largo, $alto = 2.5) {
    // Calcular área de las paredes (perímetro * altura)
    $perimetro = 2 * ($largo + $ancho);
    $areaParedes = $perimetro * $alto;
    
    // Calcular área del techo (largo * ancho)
    $areaTecho = $largo * $ancho;
    
    // Total de metros cuadrados (paredes + techo)
    return $areaParedes + $areaTecho;
}

// Función para calcular los litros de pintura necesarios
function calculoLitrosPintura($metrosTotales, $rendimiento = 8.5, $manos = 2) {
    // Litros necesarios = (metros cuadrados / rendimiento) * número de manos
    return ($metrosTotales / $rendimiento) * $manos;
}

// Función para exhibir los resultados
function exhibirResultados($metrosTotales, $litrosPintura) {
    echo "<br>=== RESULTADOS ===";
    echo "<br>Total de metros cuadrados a pintar: " . number_format($metrosTotales, 2) . " m²";
    echo "<br>Cantidad de litros de pintura necesarios: " . number_format($litrosPintura, 2) . " litros";
    echo "<br>(Considerando 2 manos de pintura y un rendimiento de 8.5 m² por litro)";
}

// Programa principal
echo "=== CALCULADORA DE PINTURA PARA DEPARTAMENTOS ===";
echo "<br>Este programa calcula la cantidad de pintura necesaria para pintar un departamento.";
echo "<br>Se asume:<br>- Altura de techos: 2.5 metros<br>- Rendimiento de pintura: 8.5 m²/litro<br>- 2 manos de pintura<br>";

// Ingresar cantidad de habitaciones
$cantidadHabitaciones = ingresoCantidadHabitaciones();

// Variables para acumular los metros cuadrados totales
$metrosCuadradosTotales = 0;

// Ingresar medidas y calcular para cada habitación
for ($i = 1; $i <= $cantidadHabitaciones; $i++) {
    list($largo, $ancho) = ingresoMedidasHabitacion($i);
    $metrosHabitacion = calculoMetrosHabitacion($ancho, $largo);
    $metrosCuadradosTotales += $metrosHabitacion;
    
    echo "<br>Habitación $i: " . number_format($metrosHabitacion, 2) . " m²<br>";
}

// Calcular litros de pintura necesarios
$litrosPintura = calculoLitrosPintura($metrosCuadradosTotales);

// Mostrar resultados
exhibirResultados($metrosCuadradosTotales, $litrosPintura);
?>