<?php

const PESO_A = 3.5;
const PESO_B = 7.5;
    
$notaA = fgets(STDIN);
$notaB = fgets(STDIN);


$notaA = $notaA * PESO_A;
$notaB = $notaB * PESO_B;
$averageGrade = somarNotasComPessoas($notaA, $notaB);


function somarNotasComPessoas($notaA, $notaB) {
     return ($notaA + $notaB) / (PESO_A + PESO_B);
}

echo "MEDIA = " . number_format($averageGrade, 5, '.', '') . PHP_EOL;

