<?php

// Autoload resources needed (as long as name is the same)
spl_autoload_register(function($class) {
  require_once "classes/{$class}.php";
});

// Create instance of Calculator
$c = new Calculator;

// Compute Addition
$c->setOperation(new Adder);
$c->compute(40, 50); // 90

// Compute Subtraction
$c->setOperation(new Subtractor);
$c->compute(20); // 80

echo $c->getResult() . "\n";
