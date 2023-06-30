<?php

declare (strict_types = 1);

namespace JotaSantos\Testes;

use JotaSantos\Classes\ExtremelyBasic;
use PHPUnit\Framework\TestCase;

final class ExtremelyBasicTest extends TestCase
{
    public function testDeveSerIgual()
    {

        $data = [
            [10, 9, 19],
            [-10, 4, -6],
            [15, -7, 8],
        ];

        foreach ($data as $key => $dt) {
            $extremelyBasic = new ExtremelyBasic($dt[0], $dt[1]);
            $this->assertSame($extremelyBasic->sum(), "X = " . $dt[2]);
            // $this->assertEquals()
        }

        // $extremelyBasic2 = new ExtremelyBasic(-10, 4);
        // $extremelyBasic3 = new ExtremelyBasic(15, -7);

        // $this->assertSame($extremelyBasic1->sum(), "X = " . 19);
        // $this->assertSame($extremelyBasic2->sum(), "X = " . -6);

    }

    // public function testTodosDevemSerFalse()
    // {
    //     $extremelyBasic1 = new ExtremelyBasic(10, 9);
    //     $extremelyBasic2 = new ExtremelyBasic(-10, 4);
    //     $extremelyBasic3 = new ExtremelyBasic(15, -7);

    //     $this->assertNotSame($extremelyBasic1->sum(), 17);
    //     $this->assertNotSame($extremelyBasic2->sum(), -66);
    //     $this->assertNotSame($extremelyBasic3->sum(), 81);
    // }

}
