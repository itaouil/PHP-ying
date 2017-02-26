<?php

/*

  Example of how to implement and use
  an interface (blueprint).

*/

// Create interface
interface SoundInterface {

  // Declare abstract method (to be implemented)
  public function sound();

}

// Create class implementing interface
class Pigeon implements SoundInterface {

  // Make use of interface
  public function sound() {

    return "Gru Gru";

  }

}

// Test
$pigeon = new Pigeon();
echo $pigeon->sound() . "\n";
