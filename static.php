<?php

/*

  Example of using static methods.

*/

class Foo {

  public static $foo = "fooProperty";

  public static function hello() {

    return "Hello from Foo method";

  }

}

// Test
echo Foo::$foo . "\n";
echo Foo::hello() . "\n\n";
