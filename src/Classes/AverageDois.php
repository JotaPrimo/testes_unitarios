<?php

namespace JotaSantos\Classes;

class AverageDois
{
    protected float $notaA;
    protected float $notaB;
    protected float $notaC;

    const PESO_A = 2;
    const PESO_B = 3;
    const PESO_C = 5;

    public function __construct(float $notaA, float $notaB, float $notaC) {
        $this->notaA = $this->formatarNotasUmaCasaDecial($notaA);
        $this->notaB = $this->formatarNotasUmaCasaDecial($notaB);
        $this->notaC = $this->formatarNotasUmaCasaDecial($notaC);
    }

    public function formatarNotasUmaCasaDecial(float $nota) {
        return number_format($nota, '1', '.', '');
    }

    public function calcualteAverage() {
        $notaA = $this->notaA * 2;
        $notaB = $this->notaB * 3;
        $notaC = $this->notaC * 5;
        $averageGrade = self::somarNotasComPesos($notaA, $notaB, $notaC);

        return "MEDIA = " . number_format($averageGrade, 1, '.', '') . PHP_EOL;
    }

   public static function somarNotasComPesos($notaA, $notaB, $notaC) {
        return ($notaA + $notaB + $notaC) / 10;
    }


}