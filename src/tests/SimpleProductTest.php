<?php

declare (strict_types = 1);

namespace JotaSantos\Testes;

use JotaSantos\Classes\SimpleProduct;
use PHPUnit\Framework\TestCase;

final class SimpleProductTest extends TestCase
{
    /** @dataProvider valueProviderShouldBeEquals */
    public function testShouldBeEquals($firstValue, $secondValue, $expectedResult)
    {
        $simpleProduct = new SimpleProduct($firstValue, $secondValue);
        $this->assertSame($simpleProduct->calculateProd(), $expectedResult);
    }

    public function valueProviderShouldBeEquals()
    {
        return [
            "shouldBeSame" => ['firstValue' => 3, 'secondValue' => 9, 'expectedResult' => "PROD = 27" . PHP_EOL],
            "shouldBeSameTwo" => ['firstValue' => -30, 'secondValue' => 10, 'expectedResult' => "PROD = -300" . PHP_EOL],
            "shouldBeSameTree" => ['firstValue' => 0, 'secondValue' => 9, 'expectedResult' => "PROD = 0" . PHP_EOL],
        ];
    }

}
