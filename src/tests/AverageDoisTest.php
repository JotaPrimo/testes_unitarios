<?php

namespace JotaSantos\Testes;

use JotaSantos\Classes\AverageDois;
use JotaSantos\Classes\AverageUm;
use PHPUnit\Framework\TestCase;

class AverageDoisTest extends TestCase
{
    /** @dataProvider valueProviderShouldBeSame */
    public function testItsShouldBeSame($firtsValue, $secondValue, $thirValue, $expectedResult)
    {
        $avergare = new AverageDois($firtsValue, $secondValue, $thirValue);
        $this->assertSame($expectedResult, $avergare->calcualteAverage());
    }

    public function valueProviderShouldBeSame()
    {
        return [
            'shouldBeValid' => [5.0, 6.0, 7.0, "MEDIA = 6.3" . PHP_EOL],
            'shouldBeValidTwo' => [5.0, 10.0, 10.0, "MEDIA = 9.0" . PHP_EOL],
            'shouldBeValidTree' => [10.0, 10.0, 5, "MEDIA = 7.5" . PHP_EOL],
        ];
    }

    /** @dataProvider valueProviderItsSholdNotBeSame */
    public function testItsShouldNotBeSame($firtsValue, $secondValue, $thirValue, $expectedResult) {
        $avergare = new AverageDois($firtsValue, $secondValue, $thirValue);
        $this->assertNotSame($expectedResult, $avergare->calcualteAverage());
    }

    public function valueProviderItsSholdNotBeSame() {
        return [
            'shouldBeValid' => [5.0, 6.0, 7.0, "MEDIA = 6.2" . PHP_EOL],
            'shouldBeValidTwo' => [5.0, 10.0, 10.0, "MEDIA = 9.1" . PHP_EOL],
            'shouldBeValidTree' => [10.0, 10.0, 5, "MEDIA = 7.6" . PHP_EOL],
        ];
    }

}
