<?php

/*

	Use inheritance to extend the properties
  of a class.

*/

// Class to be inherited
class Bird {

  // Attributes
  public $canFly;
  public $legCount;

  // Magical Constructor
  public function __construct($canFly, $legCount) {

    // Initialise attributes
    $this->canFly = $canFly;
    $this->legCount = $legCount;

  }

  // Getter
  public function canFly() {

    return $this->canFly;

  }

  public function legCount() {

    return $this->legCount;

  }

}

// Pigeon class (extending bird class) -> Inheritance concept
class Pigeon extends Bird {}

// Pinguin class (extending bird class) -> Inheritance concept
class Pinguin extends Bird {}

// Echo pigeon properties (# of legs)
$pigeon = new Pigeon(true, 2);
echo $pigeon->legCount . "\n";

// Echo pinguin properties (canFly 0: false, 1: true)
$pinguin = new Pinguin(false, 2);
echo $pigeon->canFly . "\n";
