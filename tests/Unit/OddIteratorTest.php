<?php

namespace Unit;

use Iterator\OddIterator;
use PHPUnit_Framework_TestCase;

class OddIteratorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var OddIterator
     */
    private $sut;

    public function setUp()
    {
        $this->sut = new OddIterator(range(1, 5));
    }

    public function testNextValueIsOdd()
    {
        foreach ($this->sut as $k => $v) {
            $this->assertEquals(0, $v % 2);
        }
    }
}
