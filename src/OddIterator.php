<?php

namespace Iterator;

use ArrayIterator;

class OddIterator extends ArrayIterator
{
    public function __construct(array $array)
    {
        parent::__construct($array);
    }

    public function next()
    {
        $this->jumpToNextOddNumber();
    }

    private function jumpToNextOddNumber()
    {
        parent::next();
        $value = parent::current();
        if ($value % 2 !== 0) {
            $this->jumpToNextOddNumber();
        }
    }

    public function rewind()
    {
        parent::rewind();
        $this->jumpToNextOddNumber();
    }
}
