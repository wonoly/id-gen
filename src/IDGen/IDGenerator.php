<?php

namespace IDGen;

class IDGenerator
{
    private $string = 8;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function exampleFunc()
    {
      return $this->string;
    }
}
