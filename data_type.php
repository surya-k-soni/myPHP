<?php
    // Scalar types
    $integer = 42;           // Integer 
    $float = 3.14;           // Float (double)
    $string = "Hello";       // String
    $boolean = true;         // Boolean

    // Compound types
    $array = [1, 2, 3,"Surya"];      // Array
    
    
    $object = (object)[];    // Object
    $object->name = "Surya"; // Adding a property to the object
    $object->age = 30;       // Adding another property to the object
    $object->isStudent = false; // Adding a boolean property to the object


    // Special types
    $null = null;            // NULL
    $resource = fopen(__FILE__, 'r'); // Resource

    // Output types
    var_dump($integer, $float, $string, $boolean, $array, $object, $null, $resource);

    // Close resource
    fclose($resource);
?>