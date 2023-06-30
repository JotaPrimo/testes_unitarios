<?php

declare (strict_types = 1);

namespace JotaSantos\Testes;

use JotaSantos\Classes\ExtremelyBasic;
use PHPUnit\Framework\TestCase;

final class ExtremelyBasicTest extends TestCase
{
    /**
     * @dataProvider valueProviderEquals
     */
    public function testDeveSerIgual($firstValue, $secondValue, $result)
    {
        $extremelyBasic = new ExtremelyBasic($firstValue, $secondValue);
        $this->assertSame($extremelyBasic->sum(), "X = " . $result);
    }

    public function valueProviderEquals()
    {
        return [
            'shouldBeEquals' => ['firstValue' => 10, 'secondValue' => 9, 'result' => 19],
            'shouldBeEqualsTwo' => ['firstValue' => -10, 'secondValue' => 4, 'result' => -6],
            'shouldBeEqualsTree' => ['firstValue' => 15, 'secondValue' => -7, 'result' => 8],
        ];
    }

    /** @dataProvider valueProviderNotSame  */
    public function testShouldBeNotSame($firstValue, $secondValue, $result)
    {
        $extremelyBasic = new ExtremelyBasic($firstValue, $secondValue);
        $this->assertNotSame($extremelyBasic->sum(), "X = " . $result);
    }

    public function valueProviderNotSame()
    {
        return [
            'shouldBeEquals' => ['firstValue' => 10, 'secondValue' => 9, 'result' => 18],
            'shouldBeEqualsTwo' => ['firstValue' => -10, 'secondValue' => 4, 'result' => -7],
            'shouldBeEqualsTree' => ['firstValue' => 15, 'secondValue' => -7, 'result' => 6],
        ];
    }

}
