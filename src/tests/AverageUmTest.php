<?php

namespace JotaSantos\Testes;

use JotaSantos\Classes\AverageUm;
use PHPUnit\Framework\TestCase;

class AverageUmTest extends TestCase
{
    /** @dataProvider valueProviderShouldBeSame */
    public function testItsShouldBeSame($firtsValue, $secondValue, $expectedResult)
    {
        $avergare = new AverageUm($firtsValue, $secondValue);
        $this->assertSame($expectedResult, $avergare->calcualteAverage());
    }

    public function valueProviderShouldBeSame()
    {
        return [
            'shouldBeValid' => [5.0, 7.1, "MEDIA = 6.43182" . PHP_EOL],
            'shouldBeValidTwo' => [0.0, 7.1, "MEDIA = 4.84091" . PHP_EOL],
            'shouldBeValidTree' => [10.0, 10.0, "MEDIA = 10.00000" . PHP_EOL],
        ];
    }

    /** @dataProvider valueProviderItsSholdNotBeSame */
    public function testItsShouldNotBeSame($firtsValue, $secondValue, $expectedResult) {
        $avergare = new AverageUm($firtsValue, $secondValue);
        $this->assertNotSame($expectedResult, $avergare->calcualteAverage());
    }

    public function valueProviderItsSholdNotBeSame() {
        return [
            'shouldBeValid' => [5.0, 7.1, "MEDIA = 6.43181" . PHP_EOL],
            'shouldBeValidTwo' => [0.0, 7.1, "MEDIA = 4.84090" . PHP_EOL],
            'shouldBeValidTree' => [10.0, 10.0, "MEDIA = 10.00001" . PHP_EOL],
        ];
    }

}
