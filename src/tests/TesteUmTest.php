<?php declare(strict_types=1);

namespace JotaSantos\TestesUnitarios;

use \PHPUnit\Framework\TestCase;

final class TesteUmTest extends TestCase {

    public function testGreetsWithName(): void
    {
        $greeter = 'Alice'; 

        $this->assertEquals('Alice', $greeter);
    }

}