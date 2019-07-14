<?php


namespace bigpaulie\jenkins\tests;


use bigpaulie\jenkins\Calculator;
use bigpaulie\jenkins\Exceptions\DivisionByZeroException;
use PHPUnit\Framework\TestCase;

/**
 * Class CalculatorTest
 * @package bigpaulie\jenkins\tests
 */
class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdditionShouldPass()
    {
        $result = $this->calculator->add(1, 1);
        $this->assertEquals(2, $result);
    }

    public function testSubtractionShouldPass()
    {
        $result = $this->calculator->subtract(2, 1);
        $this->assertEquals(1, $result);
    }

    public function testMultiplyShouldPass()
    {
        $result = $this->calculator->multiply(2, 2);
        $this->assertEquals(4, $result);
    }

    public function testDivisionShouldPass()
    {
        $result = $this->calculator->divide(2, 2);
        $this->assertEquals(1, $result);
    }

    public function testDivisionShouldFail()
    {
        $this->expectException(DivisionByZeroException::class);
        $this->calculator->divide(2, 0);
    }
}