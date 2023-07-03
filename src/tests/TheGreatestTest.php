<?php

namespace JotaSantos\Testes;

use PHPUnit\Framework\TestCase;
use JotaSantos\Classes\TheGreatest;

final class TheGreatestTest extends TestCase
{

    /** @dataProvider dataProviderShouldBeSame */
    public function testitsShouldBeSame($value, $expectedResult)
    {
        $theGreates = new TheGreatest($value); 
        $this->assertSame($theGreates->calculate(), $expectedResult);
     }

    public function dataProviderShouldBeSame()
    {
        return [
            'itsShouldbeSame' => ["7 14 106", "106 eh o maior"],
            'itsShouldbeSameTwo' => ["217 14 6", "217 eh o maior"],
            'itsShouldbeSameTree' => ["77 14 06", "77 eh o maior"],
        ];
    }

}
