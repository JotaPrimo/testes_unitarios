<?php

namespace JotaSantos\Classes;

class SimpleSum
{

    protected $a;
    protected $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    function calculateSum() {
        $soma = $this->a + $this->b;
        return "SOMA = " . $soma;
    }
    

}
