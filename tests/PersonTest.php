<?php


namespace bigpaulie\jenkins\tests;

use bigpaulie\jenkins\Person;
use PHPUnit\Framework\TestCase;

/**
 * Class PersonTest
 * @package bigpaulie\jenkins\tests
 */
class PersonTest extends TestCase
{
    /**
     * @var Person
     */
    private $person;

    protected function setUp(): void
    {
        $this->person = new Person();
    }

    public function testSetPersonAgeShouldPass()
    {
        $this->person->setAge(31);
        $this->assertEquals(31, $this->person->getAge());
    }
}