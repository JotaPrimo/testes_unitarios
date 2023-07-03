<?php

namespace JotaSantos\Classes;

use JotaSantos\Classes\SimpleCalculateProd;

class SimpleCalculate
{
    protected SimpleCalculateProd $prodOne;
    protected SimpleCalculateProd $prodTwo;

    public function __construct(SimpleCalculateProd $prodOne, SimpleCalculateProd $prodTwo)
    {
        $this->prodOne = $prodOne;
        $this->prodTwo = $prodTwo;
    }

    public function calculateTotalPriceProd()
    {
        $totalGeral = ($this->prodOne->getTotalPrice() + $this->prodTwo->getTotalPrice()) / 100;

        return "VALOR A PAGAR: R$ " . number_format($totalGeral, 2, '.', '') . PHP_EOL;
    }

}
