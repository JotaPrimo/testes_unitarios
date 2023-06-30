<?php

namespace JotaSantos\Testes;

use JotaSantos\Classes\Difference;
use PHPUnit\Framework\TestCase;

class DifferenceTest extends TestCase
{
    /** @dataProvider valueProviderItsShouldBevalid */
    function testItsShouldBeEquals($firtsValue, $secondValue, $thirValue, $fourthValue, $expectedResult) {
        $diference = new Difference($firtsValue, $secondValue, $thirValue, $fourthValue);
        $this->assertSame($diference->proccessCalculo(), $expectedResult);
    }

    function valueProviderItsShouldBevalid() {
        return [
            'shouldBeValid' => [5, 6, 7, 8, "DIFERENCA = -26" . PHP_EOL],
            'shouldBeValidTwo' => [0, 0, 7, 8, "DIFERENCA = -56" . PHP_EOL],
            'shouldBeValidTree' => [5, 6, -7, 8, "DIFERENCA = 86" . PHP_EOL],
        ];
    }
}