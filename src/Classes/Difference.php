<?php

namespace JotaSantos\Classes;

class Difference
{
    protected $a;
    protected $b;
    protected $c;
    protected $d;

    public function __construct($a, $b, $c, $d)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->d = $d;
    }

    public function proccessCalculo()
    {
        $prodAB = $this->a * $this->b;
        $prodCD = $this->c * $this->d;

        return "DIFERENCA = " . $this->diffProds($prodAB, $prodCD) . PHP_EOL;
    }   

    function diffProds($prodAB, $prodCD) {
        return $prodAB - $prodCD;
    }

}
