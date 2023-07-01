<?php

namespace JotaSantos\Classes;

class SalaryWithBonus
{

    protected $vendedor;
    protected $salarioFixo;
    protected $totalVendas;
    const PERCENTUAL = 15;

    public function __construct($vendedor, $salarioFixo, $totalVendas)
    {
        $this->vendedor = $vendedor;
        $this->salarioFixo = $salarioFixo * 100;
        $this->totalVendas = $totalVendas * 100;
    }

    public function calculatePayment()
    {
        $total = $this->salarioFixo + $this->calculateValueBonus();
        return $total / 100;
    }

    public function calculateValueBonus()
    {
        return ($this->totalVendas * self::PERCENTUAL) / 100;
    }

    public function tes()
    {
        $resutado = round($this->calculatePayment(), 2, PHP_ROUND_HALF_EVEN);

        return "TOTAL = R$ " . number_format($resutado, 2, '.', '') . PHP_EOL;
    }

    /**
     * Faça um programa que leia o nome do vendedor, seu salário fixo e o total da venda feita por ele no mês (em dinheiro).
     *  Considerando que este vendedor recebe 15% sobre todos os produtos vendidos, escreva o salário final (total)
     * deste vendedor no final do mês, com duas casas decimais.

     *Não se esqueça de imprimir o final da linha após o resultado, caso contrário receberá “ Erro de apresentação ”.

     * Não se esqueça dos espaços em branco.

     *Entrada
     *O arquivo de entrada contém um texto (primeiro nome do funcionário) e dois valores de dupla precisão,
     * que são o salário do vendedor e o valor total vendido por ele.
     */
}
