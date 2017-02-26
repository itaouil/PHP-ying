<?php

/*

  Method chaining trick.

*/

class Foo {

  public function first() {

    echo "Hello ";

    // Return to allow second function to be called
    return $this;

  }

  public function second() {

    echo "World !\n";

  }

}

// Test
$foo = new Foo();
$foo->first()->second();
