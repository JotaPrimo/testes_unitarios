<?php

require_once 'vendor/autoload.php';

$distanciaTotal = fgets(STDIN);
$gastoCombustivel = fgets(STDIN);

function formatandoGastoCombustivel($gastoCombustivel)
{
    return number_format($gastoCombustivel, 1, '.', '');
}

function formatandoComsumoMedio($comsumoMedio)
{
    return number_format($comsumoMedio, 3, '.', '');
}

function calculateGasto($distanciaTotal, $gastoCombustivel)
{
    $comsumoMedio = $distanciaTotal / formatandoGastoCombustivel($gastoCombustivel);
    return formatandoComsumoMedio($comsumoMedio) . " km/l" . PHP_EOL;
}

echo calculateGasto($distanciaTotal, $gastoCombustivel);
