<?php

namespace JotaSantos\Classes;

class SimpleProduct
{

    protected $a;
    protected $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function calculateProd()
    {
        $PROD = $this->a * $this->b;
        return "PROD = " . $PROD . PHP_EOL;
    }

}
