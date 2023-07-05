<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAddOperation(): void
    {
        $adder = new Calculator("add");
        $value = $adder->evaluate(2, 3);
        $this->assertEquals($value, 5);
    }

    public function testSubtractOperation(): void
    {
        $adder = new Calculator("subtract");
        $value = $adder->evaluate(2, 3);
        $this->assertEquals($value, -1);
    }

    public function testSquareOperation(): void
    {
        $adder = new Calculator("square");
        $value = $adder->evaluate(10, 2);
        $this->assertEquals($value, 100);
    }
}