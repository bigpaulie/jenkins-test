<?php


namespace bigpaulie\jenkins;

/**
 * Class Person
 * @package bigpaulie\jenkins
 */
class Person
{
    /**
     * @var int
     */
    private $age;

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}