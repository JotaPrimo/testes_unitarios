<?php

namespace JotaSantos\Classes;

class ExtremelyBasic
{

    private int $A;
    private int $B;
    private int $X;

    public function __construct(int $a, int $b)
    {
        $this->A = $a;
        $this->B = $b;
    }

    public function sum() {
        $this->X = $this->A + $this->B;
        return "X = " . $this->X;
    }



}
