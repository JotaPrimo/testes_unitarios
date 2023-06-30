<?php

namespace JotaSantos\Classes;

class AreaOfCircle
{
    const PI = 314159;

    public $R;
    // A fórmula para calcular a área de uma circunferência é definida como A = π . R 2 . 
    // Considerando para este problema que π = 3,14159 :

    // Calcule a área usando a fórmula fornecida na descrição do problema.
    
    // Entrada
    // A entrada contém um valor de ponto flutuante (precisão dupla), que é a variável R .
    
    // Saída
    // Apresente a mensagem "A=" seguida do valor da variável, conforme exemplo abaixo, com quatro casas após a vírgula. 
    // Use todas as variáveis ​​de precisão dupla. Como todos os problemas, não se esqueça de imprimir o final da linha 
    // após o resultado, caso contrário, você receberá "Erro de apresentação".
    public function __construct($R) {
        $this->R = $R;
    }

    // 31.819.310.315.264 

    public function calculate() {
        $inteiroR = $this->R * 100;
        $area = self::PI * $inteiroR ** 2;         
    }

}
