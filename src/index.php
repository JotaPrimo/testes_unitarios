<?php

require_once 'vendor/autoload.php';

// $variavel = fgets(STDIN);

$codeProd = fgets(STDIN);
$numberUnitsProd = fgets(STDIN);
$priceOfUnitProd = fgets(STDIN) * 100;

$codeProdTwo = fgets(STDIN);
$numberUnitsProdTwo = fgets(STDIN);
$priceOfUnitProdTwo = fgets(STDIN) * 100;

$dataProdOne = [
    'codeProd' => $codeProd,
    'numberUnitsProd' => $numberUnitsProd,
    'priceOfUnitProd' => $priceOfUnitProd,
];

$dataProdTwo = [
    'codeProdTwo' => $codeProdTwo,
    'numberUnitsProdTwo' => $numberUnitsProdTwo,
    'priceOfUnitProdTwo' => $priceOfUnitProdTwo,
];

function getTotalPrice($numberUnitsProd, $priceOfUnitProd)
{
    if ($numberUnitsProd == 0 || $priceOfUnitProd == 0) {
        return 0;
    }

    return $numberUnitsProd * $priceOfUnitProd;
}

function calculateTotalPriceOfShoping($dataProdOne, $dataProdTwo)
{
    $totalGeralProdOne = getTotalPrice($dataProdOne['numberUnitsProd'], $dataProdOne['priceOfUnitProd']);
    $totalGeralProdTwo = getTotalPrice($dataProdTwo['numberUnitsProdTwo'], $dataProdTwo['priceOfUnitProdTwo']);

    return ($totalGeralProdOne + $totalGeralProdTwo) / 100;
}

$result = calculateTotalPriceOfShoping($dataProdOne, $dataProdTwo);
$roundedResult = round($result, 2, PHP_ROUND_HALF_EVEN);

echo "VALOR A PAGAR: R$ " . number_format($result, 2, '.', '') . PHP_EOL;
