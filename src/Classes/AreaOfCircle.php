<?php

namespace JotaSantos\Classes;

class AreaOfCircle
{
    const PI = 3.14159;

    public $raio;
    
    public function __construct($raio) {
        $this->raio = $raio;
    }

    // 31.819.310.315.264 

    public function calculate() {
        $area = number_format(round(pow($this->raio, 2) * self::PI, 4),4,'.', ''); //ou $area = ($raio*$raio)*$pi;       
    }



}
