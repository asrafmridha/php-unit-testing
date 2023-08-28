<?php

use PHPUnit\Framework\TestCase;

class firstTest extends TestCase
{
    function testSomething()
    {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
    }
    function testAnother()
    {
        $result = 1;
        $this->assertEquals(true, $result);
    }
}
