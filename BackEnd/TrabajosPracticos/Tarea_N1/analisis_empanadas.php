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
            $venta_dia = $i+1;
        }
    }
    return ['dia'=> $venta_dia, 'cantidad'=> $venta_mayor];
}

$resultadoMayor = mayorVenta($empanadasVendidas);
echo "El día de mayor venta fue el " . $resultadoMayor['dia'] ."\n";

echo "La mayor venta fue de ". $resultadoMayor['cantidad'];