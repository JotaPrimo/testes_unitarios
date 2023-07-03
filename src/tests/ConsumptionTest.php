<?php

namespace JotaSantos\Testes;

use JotaSantos\Classes\Consumption;
use PHPUnit\Framework\TestCase;

class ConsumptionTest extends TestCase {

    /** @dataProvider dataProviderItsShouldBeSame */
    public function testItsShouldBeSame($distanciaTotal, $gastoCombustivel, $resultExpected) {
       $consumption = new Consumption($distanciaTotal, $gastoCombustivel);
       $this->assertSame($consumption->calculateGasto(), $resultExpected);
    }

    
    public function dataProviderItsShouldBeSame() {
        return [
            'testItsShouldBeSame' => [500, 35.0, "14.286 km/l"],
            'testItsShouldBeSameTwo' => [2254, 124.4, "18.119 km/l"],
            'testItsShouldBeSameTree' => [4554, 464.6, "9.802 km/l"],
        ];
    }



}