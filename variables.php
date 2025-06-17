<?php
    echo "Hello World!"; //String
    echo "<br>";

    echo 23; //Integer
    echo "<br>";

    echo "23"; //String
    echo "<br>";

    echo 23.45; //Float
    echo "<br>";

    echo true; //Boolean True or flase
    echo "<br>";

    echo null; //Null
    echo "<br>";


    $x = "Surya kant"; //String
    echo $x; // Outputs "Surya kant"
    echo "<br>";
    echo var_dump($x); // Outputs the type of variable($x) and value of $x;

    //$y = array(1, 2, 3); //Array
    $y = array("apple", "banana", "cherry"); //Array
    echo "<br>";

      echo "<pre>";
    echo var_dump($y); // Outputs the type and value of $y;
    echo "<br>";

      echo "<pre>";
    echo print_r($y); // Outputs the array in a human-readable format
    echo "<br>";

    echo implode(",", $y); // Converts array to string: "apple, banana, cherry"
    echo "<br>";
?>