<?php declare(strict_types=1);

namespace JotaSantos\Testes;

use JotaSantos\Classes\HelloWorld;
use PHPUnit\Framework\TestCase;


final class HelloWorldTest extends TestCase {

    const RESULTADO_CORRETO = "Hello World!";

    public function testDeveSerVerdadeiro() {

        $this->assertSame(HelloWorld::MSG, self::RESULTADO_CORRETO);
        
    }


    public function testDeveSerFalso() {
        $this->assertNotEquals(self::RESULTADO_CORRETO, "Hello World");
        
    }


}