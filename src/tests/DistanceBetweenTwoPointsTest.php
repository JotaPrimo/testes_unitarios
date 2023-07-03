<?php

namespace JotaSantos\Testes;

use JotaSantos\Classes\DistanceBetweenTwoPoints;
use PHPUnit\Framework\TestCase;

class DistanceBetweenTwoPointsTest extends TestCase {

    /** @dataProvider valueProviderItsShouldBeSame  */
    public  function testItsShouldBeSame($firstValue, $secondValues, $expectedResult) {
       $distance = new DistanceBetweenTwoPoints($firstValue, $secondValues);
       $this->assertSame($distance->calcularResultado(), $expectedResult);
    }

    function valueProviderItsShouldBeSame() {
        return [
            'shouldBeSame' => ["1.0 7.0", "5.0 9.0", 4.4721 . PHP_EOL],
            'shouldBeSameTwo' => ["-2.5 0.4", "12.1 7.3", 16.1484 . PHP_EOL],
            'shouldBeSameTree' => ["2.5 -0.4", "-12.2 7.0", 16.4575 . PHP_EOL],
        ];
    }


}