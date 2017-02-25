<?php

/*

	PHP example of how to handle objects (syntax).
	This serves as an introduction to the world of
	Object Oriented Programming with PHP.

*/

// Create and object
$object = new stdClass;

// Add propery to object
$object->names = ["Ilyass", "Maria", "Luciano"];

// Print each name (iteration over object property)
foreach ($object->names as $name) {

	echo $name;

}
