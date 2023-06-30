<?php

require_once 'vendor/autoload.php';


$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);
$d = fgets(STDIN);


function diffProds($prodAB, $prodCD) 
{
    return $prodAB - $prodCD;
}

$prodAB = $a * $b;
$prodCD = $c * $d;

echo "DIFERENCA = " . diffProds($prodAB, $prodCD) . PHP_EOL;


