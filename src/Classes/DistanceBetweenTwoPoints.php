<?php

namespace JotaSantos\Classes;

class DistanceBetweenTwoPoints
{

    protected $x1;
    protected $y1;
    protected $x2;
    protected $y2;

    public function __construct($firstLineInput, $secondLineInput)
    {
        $this->extraindoValores($firstLineInput, $secondLineInput);
    }

    public function extraindoValores($firstLineInput, $secondLineInput)
    {
        $dataFirstLine = explode(" ", trim($firstLineInput));
        $dataSecondExplode = explode(" ", $secondLineInput);

        return [
            'dataFirstLine' => $dataFirstLine,
            'dataSecondExplode' => $dataSecondExplode,
        ];
    }

    public function atualizandoValoresEntrada($data)
    {
        $this->x1 = $this->formatandoValoresDeEntrada($data['dataFirstLine'][0]);
        $this->y1 = $this->formatandoValoresDeEntrada($data['dataFirstLine'][1]);

        $this->x2 = $this->formatandoValoresDeEntrada($data['dataSecondExplode'][0]);
        $this->y2 = $this->formatandoValoresDeEntrada($data['dataSecondExplode'][1]);
    }

    // deve formatar o valores de entrada com uma casa decimal
    public function formatandoValoresDeEntrada($value)
    {
        return number_format($value, 1, '.', '');
    }

    // deve formatar o valores de saida com 4 casa decimal
    public function formatandoValoresDeSaida($value)
    {
        return number_format($value, 1, '.', '');
    }

    // deve retornar o quadrado da diferenca entre x1 - y1
    function getPrimeiraDiferenca()
    {
        //  x² – 2xy + y²
        return ($this->x1 ** 2) - (2 * $this->x1 * $this->y1) + ($this->y1 ** 2);
    }

    // deve retornar o quadrado da diferenca entre x2 - y2
    function getSegundaDiferenca()
    {
         //  x² – 2xy + y²
         return ($this->x2 ** 2) - (2 * $this->x2 * $this->y2) + ($this->y2 ** 2);
    }


    // deve somar os quadrados da difenrenca
    function somarQuadradosDaDiferenca() {
        return $this->getPrimeiraDiferenca() + $this->getSegundaDiferenca();
    }

    
    // retorna a raiz quadrada da soma
    function calcularResultado() {
        $resultado = sqrt($this->somarQuadradosDaDiferenca());

        return $this->formatandoValoresDeSaida($resultado) . PHP_EOL;
    }



}
