<?php

namespace IDGen;

class IDGenerator
{

  public $rounds = 3;

  public function __construct($rounds = 3)
  {
    $this->rounds = $rounds;
  }

  public function generate()
  {

    $res = "";

    for ($i = 0; $i < $this->rounds; $i++) {

      $time = time();
      $rand = rand() * time();

      $res = (string)round($time, $rand);
    }

    return $res;
  }
}
