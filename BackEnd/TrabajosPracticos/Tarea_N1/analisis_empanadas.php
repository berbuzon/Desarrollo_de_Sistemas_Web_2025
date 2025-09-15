<?php
$empanadasVendidas = [
    10,
    43,
    46,
    26,
    482,
    620,
    324,
    94,
    32,
    14,
    65,
    503,
    720,
    234,
    48,
    21,
    54,
    79,
    89,
    365,
    621,
    478,
    832,
    49,
    30,
    27,
    44,
    73,
    300,
    100,
    200
];

function mayorVenta($ventas)
{
    $venta_mayor = 0;
    $venta_dia = 0;
    for ($i = 0; $i < count($ventas); $i++) {
        if ($ventas[$i] > $venta_mayor) {
            $venta_mayor = $ventas[$i];
            $venta_dia = $i + 1;
        }
    }
    return ['dia' => $venta_dia, 'cantidad' => $venta_mayor];
}

function imprimirVentas($ventas)
{
    for ($i = 0; $i < count($ventas); $i++) {
        echo "Dia " . ($i + 1) . " Cantidad " . $ventas[$i];
        echo "\n";
    }
}

function promedioVentas($ventas)
{
    $sumaEmpanadas = 0;
    for ($i = 0; $i < count($ventas); $i++) {
        $sumaEmpanadas = $sumaEmpanadas + $ventas[$i];
    }
    return $sumaEmpanadas / count(($ventas));
}

function menorVenta($ventas)
{
    $menorVenta = $ventas[0];
    $diaMenorVenta = 1;
    for ($i = 0; $i < count($ventas); $i++) {
        if ($menorVenta > $ventas[$i]) {
            $menorVenta = $ventas[$i];
            $diaMenorVenta = $i+1;
        }
    }
    return ['dia' => $diaMenorVenta, 'cantidad' => $menorVenta];
}


$resultadoMayor = mayorVenta($empanadasVendidas);

echo "El día de mayor venta fue el " . $resultadoMayor['dia'] . "\n";

echo "La mayor venta fue de " . $resultadoMayor['cantidad'];
echo "\n";
echo "Listado de ventas diarias: \n";
imprimirVentas($empanadasVendidas);
echo "\n";
echo "El promedio de ventas es : " . round(promedioVentas($empanadasVendidas), 0);
echo "\n";
$resultadoMenor = menorVenta($empanadasVendidas);
echo "El día de menor venta fue el " . $resultadoMenor['dia'];
echo "\n";
echo "La menor venta fue de " . $resultadoMenor['cantidad'];
echo "\n";
