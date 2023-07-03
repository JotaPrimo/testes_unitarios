<?php

namespace JotaSantos\Classes;

class Consumption
{

    protected int $distanciaTotal;
    protected float $gastoCombustivel;

    public function __construct(int $distanciaTotal, float $gastoCombustivel)
    {
        $this->distanciaTotal = $distanciaTotal;
        $this->gastoCombustivel = $gastoCombustivel;
    }

    public function formatandoGastoCombustivel()
    {
        return number_format($this->gastoCombustivel, 1, '.', '');
    }

    public function formatandoComsumoMedio($comsumoMedio)
    {
        return number_format($comsumoMedio, 3, '.', '');
    }

    public function calculateGasto()
    {
        $comsumoMedio = $this->distanciaTotal / $this->formatandoGastoCombustivel();
        return $this->formatandoComsumoMedio($comsumoMedio) . " km/l";

    }

}
