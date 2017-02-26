<?php

class Adder implements OperatorInterface {

  // run method (from interface implemented)
  public function run($number, $result) {

    return $result + $number;

  }

}
