<?php

namespace JotaSantos\Testes;

use JotaSantos\Classes\SimpleCalculate;
use JotaSantos\Classes\SimpleCalculateProd;
use PHPUnit\Framework\TestCase;

final class SimpleCalculateTest extends TestCase
{

    /** @dataProvider dataProviderShouldBeSame */
    public function testItsShouldBeSame($prodOne, $prodTwo, $expectedResult)
    {        
        $result = (new SimpleCalculate($prodOne, $prodTwo))->calculateTotalPriceProd();
        $this->assertSame($result, $expectedResult);
    }

    public function dataProviderShouldBeSame()
    {
        $prodOne = new SimpleCalculateProd(1, 1, 15.10);
        $prodTwo = new SimpleCalculateProd(2, 1, 15.10);       

        return [
            'itsShouldBeSame' => [$prodOne, $prodTwo, "VALOR A PAGAR: R$ 30.20" . PHP_EOL],
            // 'itsShouldBeSameTwo' => [],
            // 'itsShouldBeSameTree' => [],
        ];
    }

}
