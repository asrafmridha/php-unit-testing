<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

// require("src/Calculator.php");

class CalculatorTest extends TestCase
{
    private $calc;

    protected function setUp(): void
    {
        $this->calc = new App\Calculator();
    }

    function testAddition()
    {
        $result = $this->calc->add(2, 3);
        $this->assertEquals(5, $result);
    }
    function testMultiply(...$operands)
    {
        $result = $this->calc->multiply(5, 3);
        $this->assertEquals(15, $result);
    }

    static function dataProviderForMultipication(){
        return [
            [7,3,21],
            [9,3,27],
            [11,9,99],
        ];
    }

    #[DataProvider('dataProviderForMultipication')]
    // /** @dataProvider dataProviderForMultipication*/
    function testMultipicationOfTwoNumbersUsingDataProvider($num1, $num2, $expected)
    {
        $result = $this->calc->multiply($num1, $num2);
        $this->assertEquals($expected,$result);
    }
}
