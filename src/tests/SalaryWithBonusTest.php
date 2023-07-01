<?php declare (strict_types = 1);

namespace JotaSantos\Testes;

use JotaSantos\Classes\SalaryWithBonus;
use \PHPUnit\Framework\TestCase;

final class SalaryWithBonusTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testItsShouldBeSame($firts, $second, $third, $expectedResult) {
        $sal = new SalaryWithBonus($firts, $second, $third);
        $this->assertSame($sal->tes(), $expectedResult);
    }

    public function dataProvider() {
        return [
            'itsShouldbeSame' => [ "JOAO", 500.00, 1230.30, "TOTAL = R$ 684.54" . PHP_EOL],
            'itsShouldbeSameTwo' => [ "PEDRO", 700.00, 0, "TOTAL = R$ 700.00" . PHP_EOL],
            'itsShouldbeSameTre' => [ "MANGOJATA", 1700.00, 1230.50, "TOTAL = R$ 1884.58" . PHP_EOL],
        ];
    }


}
