<?php

declare (strict_types = 1);

namespace JotaSantos\Testes;

use JotaSantos\Classes\SimpleSum;
use PHPUnit\Framework\TestCase;

final class SimpleSumTest extends TestCase
{

    /**
     * @dataProvider valueProviderShouldBeValid
     */
    public function testShouldBeValid($firstvalue, $secondValue, $expectedResult)
    {
        $simpleSum = new SimpleSum($firstvalue, $secondValue);       
        $this->assertSame($simpleSum->calculateSum(),  $expectedResult);
    }

    public function valueProviderShouldBeValid()
    {
        return [
            "shouldBeValid" => [30, 10, "SOMA = 40"],
            "shouldBeValidTwo" => [-30, 10, "SOMA = -20"],
            "shouldBeValidTree" => [0, 0, "SOMA = 0"],
        ];
    }


}
