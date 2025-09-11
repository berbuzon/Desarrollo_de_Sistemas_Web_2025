<?php
// Mostrar el enunciado del ejercicio con saltos de línea HTML
echo "Ejercitación de funciones, estructuras (condicionales y bucles)<br>";
echo "1. En una tienda de empanadas quieren saber qué día del mes venden más cantidad de empanadas.<br>";
echo "a. Realice un programa para almacenar la cantidad de empanadas vendidas por día (considerar que el mes tiene 30 días). Utilizar el array empanadasVendidas[]. Cargar el array con los siguientes valores: {10, 43, 46, 26, 482, 620, 324, 94, 32, 14, 65, 503, 720, 234, 48, 21, 54, 79, 89, 365, 621, 478, 832, 49, 30, 27, 44, 73, 300, 100, 200}<br>";
echo "b. Realizar una función que encuentre que día del mes vendió más empanadas. La función debe devolver el número de día de mayor venta. Informar al usuario que día se vendió más empanadas y cuántas se vendió.<br>";
echo "c. A la función mayorVenta() se le debe pasar el array empanadasVendidas[] y deberá devolver:<br>";
echo "&nbsp;&nbsp;&nbsp;i. El número de día de mayor venta.<br>";
echo "&nbsp;&nbsp;&nbsp;ii. La cantidad vendida ése día.<br>";
echo "&nbsp;&nbsp;&nbsp;iii. imprimirVentas() : para imprimir las ventas de cada uno de los días. Debe mostrar el número de día y la cantidad de empanadas vendida.<br>";
echo "&nbsp;&nbsp;&nbsp;iv. promedioVentas() : para imprimir el promedio de las ventas.<br>";
echo "&nbsp;&nbsp;&nbsp;v. menorVenta() : para imprimir la cantidad mínima de venta en un día. Informar día y cantidad.<br><br>";

// Datos de ventas de empanadas por día (30 días)
// Nota: El array original tenía 31 elementos, pero el mes tiene 30 días, así que eliminamos el último
$empanadasVendidas = [10, 43, 46, 26, 482, 620, 324, 94, 32, 14, 65, 503, 
                     720, 234, 48, 21, 54, 79, 89, 365, 621, 478, 832, 49, 
                     30, 27, 44, 73, 300, 100];

// Función para encontrar el día de mayor venta
function mayorVenta($ventas) {
    $maxVenta = $ventas[0];
    $diaMax = 1;
    
    for ($i = 1; $i < count($ventas); $i++) {
        if ($ventas[$i] > $maxVenta) {
            $maxVenta = $ventas[$i];
            $diaMax = $i + 1;
        }
    }
    
    return ['dia' => $diaMax, 'cantidad' => $maxVenta];
}

// Función para encontrar el día de menor venta
function menorVenta($ventas) {
    $minVenta = $ventas[0];
    $diaMin = 1;
    
    for ($i = 1; $i < count($ventas); $i++) {
        if ($ventas[$i] < $minVenta) {
            $minVenta = $ventas[$i];
            $diaMin = $i + 1;
        }
    }
    
    return ['dia' => $diaMin, 'cantidad' => $minVenta];
}

// Función para calcular el promedio de ventas
function promedioVentas($ventas) {
    $total = array_sum($ventas);
    return $total / count($ventas);
}

// Función para imprimir las ventas
function imprimirVentas($ventas) {
    echo "<br>Ventas por día:<br>";
    echo "Día - Cantidad<br>";
    echo "-------------<br>";
    
    for ($i = 0; $i < count($ventas); $i++) {
        echo ($i + 1) . " - " . $ventas[$i] . "<br>";
    }
}

// Calcular resultados
$resultadoMayor = mayorVenta($empanadasVendidas);
$resultadoMenor = menorVenta($empanadasVendidas);
$promedio = promedioVentas($empanadasVendidas);

// Mostrar resultados
echo "<br>=== RESULTADOS DEL ANÁLISIS ===<br><br>";
echo "Día de mayor venta: Día " . $resultadoMayor['dia'] . 
     " con " . $resultadoMayor['cantidad'] . " empanadas vendidas<br><br>";
echo "Día de menor venta: Día " . $resultadoMenor['dia'] . 
     " con " . $resultadoMenor['cantidad'] . " empanadas vendidas<br><br>";
echo "Promedio de ventas: " . number_format($promedio, 2) . " empanadas por día<br><br>";

// Imprimir todas las ventas
imprimirVentas($empanadasVendidas);
?>