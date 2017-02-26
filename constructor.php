<?php

/*

	How to construct a class in PHP and
  hence, how to create modular code.

  Same as class.php but with the magic
  methos __construct.

*/

// Create class
class Person {

  public $age;
  public $name;

  public function __construct($age, $name) {

    $this->age = $age;
    $this->name = $name;

  }

  public function sentence() {

    return $this->name . " is " . $this->age . " years old \n";

  }

}

// Make use of the class (with constructor)
$person = new Person(21, "Ilyass");

echo $person->sentence();
