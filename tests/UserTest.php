<?php


use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    function testSayTahmina()
    {
        $user = new App\Models\User();
        $result = $user->sayHi();
        $this->assertEquals("Hlw Tahmina", $result);
    }
}
