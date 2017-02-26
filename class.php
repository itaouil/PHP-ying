<?php

/*

	How to create a class in PHP and
  hence, how to create modular code.

  P.S: For a simple example as this one,
  this approach is for sure an overkill,
  but it is a good one for demonstrating
  the behind principle.

*/

// Create class
class Person {

  public $age;
  public $name;

  public function sentence() {

    return $this->name . " is " . $this->age . " years old \n";

  }

}

// Make use of the class
$person = new Person();

$person->age = 21;
$person->name = "Ilyass";

echo $person->sentence();
