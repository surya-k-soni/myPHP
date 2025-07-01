<?php

    // This code calculates the area, circumference, and diameter of a circle given its radius.
    // The radius is defined as 5, and the area is calculated using the formula: area = pi * radius^2.
    // Calculate area
    // Area is pi * radius^2
    // Formula: area = pi * radius^2
    $radius = 5;
    $area = pi() * ($radius ** 2);   // ** is exponentiation in PHP 7+
    echo "<p>For a circle with radius $radius, the area is $area.</p>";


    // Note: pi() is a built-in PHP function that returns the value of pi (approximately 3.14159).
    // Calculate circumference
    // Circumference is 2 * pi * radius
    // Formula: circumference = 2 * pi * radius
    // Using pi() function for the value of pi
    // pi() returns the value of pi in PHP
    if ($radius <= 0) {
        echo "<p>Radius must be a positive number.</p>";
        exit;
    }
    if (!is_numeric($radius)) {
        echo "<p>Radius must be a number.</p>";
        exit;
    }
    $circumference = 2 * pi() * $radius;
    echo "<p>For a circle with radius $radius, the circumference is $circumference.</p>";


    // Calculate diameter
    // Diameter is twice the radius
    // Formula: diameter = 2 * radius
    $diameter = 2 * $radius;
    echo "<p>For a circle with radius $radius, the diameter is $diameter.</p>";

    $is_circle = $radius>0 && is_numeric($radius) && $radius == $diameter / 2;
    // Check if the radius is a positive number and if it is a circle
    // The condition checks if the radius is a positive number and if the diameter is twice the radius
    if ($is_circle) {
        echo "<p>This is a circle.</p>";
    }
    else {
        echo "<p>This is not a circle.</p>";
    }

?>
