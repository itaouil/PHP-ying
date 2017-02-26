<?php

class Calculator {

  // Declate attributes
  public $result;
  public $operation;

  // Set Operation to be executed
  public function setOperation(OperatorInterface $operation) {

    $this->operation = $operation;

  }

  // Compute Method
  public function compute() {

    foreach(func_get_args() as $number) {

      $this->result = $this->operation->run($number, $this->result);

    }

  }

  // Get Result Method
  public function getResult() {

    return $this->result;

  }

}
