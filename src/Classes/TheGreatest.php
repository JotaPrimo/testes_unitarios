<?php

namespace JotaSantos\Classes;


class TheGreatest {

    protected int $a;
    protected int $b;
    protected int $s;

    public function __construct($data) {

        $expde = explode(" ", trim($data));

        $this->a =  $expde[0];
        $this->b =  $expde[1];
        $this->s =  $expde[2];
    }

    public function calculate() {        
        $maior = $this->a;

        if ($this->b > $maior) {
            $maior = $this->b;
        }

        if ($this->s > $maior) {
            $maior = $this->s;
        }

        return $maior . " eh o maior";
    }

    

}