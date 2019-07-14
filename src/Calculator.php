<?php


namespace bigpaulie\jenkins;

use bigpaulie\jenkins\Exceptions\CalculatorException;
use bigpaulie\jenkins\Exceptions\DivisionByZeroException;

/**
 * Class Calculator
 * @package bigpaulie\jenkins
 */
class Calculator
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add(int $a, int $b):int
    {
        return $a + $b;
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function subtract(int $a, int $b):int
    {
        return $a - $b;
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function multiply(int $a, int $b):int
    {
        return $a * $b;
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     * @throws DivisionByZeroException
     */
    public function divide(int $a, int $b):int
    {
        if ($a == 0 || $b == 0) {
            throw new DivisionByZeroException('Division by zero');
        }
        return $a / $b;
    }
}