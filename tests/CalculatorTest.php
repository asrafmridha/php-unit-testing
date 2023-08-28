<?php

use PHPUnit\Framework\TestCase;

require("src/Calculator.php");

class CalculatorTest extends TestCase
{
    private $calc;

    protected function setUp() :void
    {
        $this->calc = new Calculator();
    }

    function testAddition()
    {
        $result= $this->calc->add(2,3);
        $this->assertEquals(5,$result);
    }
    function testMultiply(...$operands)
    {
        $result = $this->calc->multiply(5, 3);
        $this->assertEquals(15, $result);
    }
}
