<?php
function calculoMetrosHabitacion($largo, $ancho, $alto)
{
    $superficie = (2 * $largo * $alto) + (2 * $ancho * $alto);
    return $superficie;
}

function calculoLitrosPintura($superficie)
{
    $litrosPintura = $superficie / 8.5;
    return $litrosPintura;
}

function ingresoCantidadHabitaciones()
{
    $cantidadHabitaciones = readline("Ingrese la cantidad de habitaciones (1 a 4): ");
    return (int)$cantidadHabitaciones;
}
function ingresoMedidasHabitacion()
{
    echo "Ingrese las medidas de la habitación:\n";
    $ancho = (float) readline("Ingrese ancho: ");
    $largo = (float) readline("Ingrese largo: ");
    return ['ancho' => $ancho, 'largo' => $largo];
}




function CalcularSuperficieTotalDelDepartamento()
{
    $superficieTotalDelDepartamento = 0;
    $cantidad = ingresoCantidadHabitaciones();
    for ($i = 0; $i < $cantidad; $i++) {
        $medidas = ingresoMedidasHabitacion();
        $superficieTotalDelDepartamento += calculoMetrosHabitacion($medidas['largo'], $medidas['ancho'], 2.5);
        echo "Habitación ".($i+1)." - Superficie = ". calculoMetrosHabitacion($medidas['largo'], $medidas['ancho'], 2.5) . " m2\n";
    }
    return $superficieTotalDelDepartamento;
}

$superficieTotal = CalcularSuperficieTotalDelDepartamento();
$superficieTotalConDosManos = $superficieTotal * 2;
$PinturaTotal = calculoLitrosPintura($superficieTotalConDosManos);

function exhibirResultados($superficieTotalDelDepartamento, $PinturaTotal)
{
    echo "Total de metros cuadrados a pintar (2 manos): " . $superficieTotalDelDepartamento . " m2\n";
    echo "Litros de pintura necesarios: " . round($PinturaTotal, 2) . " litros\n";
}


exhibirResultados($superficieTotalConDosManos, $PinturaTotal);
