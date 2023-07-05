<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * @covers \App\Calculator
     */
    public function testAddOperation(): void
    {
        $adder = new Calculator("add");
        $value = $adder->evaluate(2, 3);
        $this->assertEquals($value, 5);
    }

    /**
     * @covers \App\Calculator
     */
    public function testSubtractOperation(): void
    {
        $adder = new Calculator("subtract");
        $value = $adder->evaluate(2, 3);
        $this->assertEquals($value, -1);
    }

    /**
     * @covers \App\Calculator
     */
    public function testSquareOperation(): void
    {
        $adder = new Calculator("square");
        $value = $adder->evaluate(10, 2);
        $this->assertEquals($value, 100);
    }
}