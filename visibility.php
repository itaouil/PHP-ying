<?php

/*

	Demonstrating the usage of attributes
  visibility:

  1) Public
  2) Protected
  3) Private

*/

// Class to be inherited
class Bird {

  // Attributes
  public $canFly;
  protected $legCount;
  private $canSing;

  // Magical Constructor
  public function __construct($canFly, $legCount, $canSing) {

    // Initialise attributes
    $this->canFly = $canFly;      // public
    $this->legCount = $legCount;  // protected
    $this->canSing = $canSing;    // private

  }

  public function getCanFly() {

    return $this->canFly;

  }

  public function getLegCount() {

    return $this->legCount;

  }

  public function getCanSing() {

    return $this->canSing;

  }

}

// Classes extending Bird
class Pigeon extends Bird {

  public function getPigeonLegCount() {

    return $this->legCount;

  }

  // It throws an error
  public function getPigeonCanSing() {

    return $this->canSing;

  }

}

class Pinguin extends Bird {

  public function getPinguinLegCount() {

    return $this->legCount;

  }

  // It throws an error
  public function getPinguinCanSing() {

    return $this->canSing;

  }

}

// Instanciate classes
$bird = new Bird(true, 2, "no");
$pigeon = new Pigeon(true, 2, "yes");
$pinguin = new Pinguin(false, 2, "yes");

// Demostration of public
echo "canFly is PUBLIC and can be called by everyone in every occasion: \n\n";
echo "\tPinguin canFly: " . $pinguin->canFly . " Pigeon canFly: " . $pigeon->canFly . "\n\n";

// Demostration of protected
echo "legCount is PROTECTED and can be called only within the definition class or inside the subclass methods: \n\n";
echo "\tPinguin legCount: " . $pinguin->getPinguinLegCount() . " Pigeon canFly: " . $pigeon->getPigeonLegCount() . "\n\n";


// Demostration of private
echo "legCount is PRIVATE and can be called only within the definition class AND NOWHERE ELSE: \n\n";
echo "\tBird canSing: " . $bird->getCanSing() . "\n\n";

echo "\tPinguin: " . $pinguin->getCanFly() . " " . $pinguin->getLegCount() . " " . $pinguin->getCanSing() . "\n\n";
