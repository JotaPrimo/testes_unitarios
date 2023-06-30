<?php

namespace JotaSantos\Classes;

class AverageUm
{
    protected float $notaA;
    protected float $notaB;

    const PESO_A = 3.5;
    const PESO_B = 7.5;

    public function __construct(float $notaA, float $notaB) {
        $this->notaA = $notaA;
        $this->notaB = $notaB;
    }

    public function calcualteAverage() {
        $notaA = $this->notaA * self::PESO_A;
        $notaB = $this->notaB * self::PESO_B;
        $averageGrade = self::somarNotasComPessoas($notaA, $notaB);

        return "MEDIA = " . number_format($averageGrade, 5, '.', '') . PHP_EOL;
    }

   public static function somarNotasComPessoas($notaA, $notaB) {
        return ($notaA + $notaB) / (self::PESO_A + self::PESO_B);
    }


}