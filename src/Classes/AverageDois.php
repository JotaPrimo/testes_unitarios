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
        $this->notaA = $notaA;
        $this->notaB = $notaB;
        $this->notaC = $notaC;
    }

    public function calcualteAverage() {
        $notaA = $this->notaA * self::PESO_A;
        $notaB = $this->notaB * self::PESO_B;
        $notaC = $this->notaC * self::PESO_C;
        $averageGrade = self::somarNotasComPesos($notaA, $notaB, $notaC);

        return "MEDIA = " . number_format($averageGrade, 1, '.', '') . PHP_EOL;
    }

   public static function somarNotasComPesos($notaA, $notaB, $notaC) {
        return ($notaA + $notaB + $notaC) / (self::PESO_A + self::PESO_B + self::PESO_C);
    }


}