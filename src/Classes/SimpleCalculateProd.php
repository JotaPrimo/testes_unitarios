<?php

namespace JotaSantos\Classes;

class SimpleCalculateProd
{

    protected int $codeProd;
    protected int $numberUnitsProd;
    protected float $priceOfUnitProd;

    public function __construct(int $codeProd, int $numberUnitsProd, float $priceOfUnitProd)
    {
        $this->codeProd = $codeProd;
        $this->numberUnitsProd = $numberUnitsProd;
        $this->priceOfUnitProd = $priceOfUnitProd;
    }

    public function getTotalPrice()
    {
        // transformando preço para centavos, pra fazer multiplicao por inteiro
        return $this->numberUnitsProd * ($this->priceOfUnitProd * 100);
    }

}
