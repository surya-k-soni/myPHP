<?php
// Operators in PHP
// Arithmetic Operators
$sum = 10 + 5;          // Addition
$difference = 10 - 5;   // Subtraction
$product = 10 * 5;      // Multiplication
$quotient = 10 / 5;     // Division
$remainder = 10 % 3;    // Modulus
$exponent = 2 ** 3;     // Exponentiation


// Assignment Operators
$assignment = 10;       // Assignment
$assignment += 5;      // Add and assign
/*$assignment -= 3;      // Subtract and assign
$assignment *= 2;      // Multiply and assign
$assignment /= 4;      // Divide and assign
$assignment %= 3;      // Modulus and assign*/


// Comparison Operators
$isEqual = (10 == 10);          // Equal
$isNotEqual = (10 != 5);       // Not equal

$isIdentical = (10 === 10);    // Identical
$isNotIdentical = (10 !== 5); // Not identical
$isGreaterThan = (10 > 5);      // Greater than
$isLessThan = (10 < 5);         // Less than
$isGreaterThanOrEqual = (10 >= 5); // Greater than or equal to
$isLessThanOrEqual = (10 <= 5); // Less than or equal to


// Logical Operators
$isTrue = true && false;        // AND
$isFalse = true || false;       // OR
$isNotTrue = !true;            // NOT


// Bitwise Operators
$bitwiseAnd = 5 & 3;          // Bitwise AND
$bitwiseOr = 5 | 3;           // Bitwise OR
$bitwiseXor = 5 ^ 3;          // Bitwise XOR
$bitwiseNot = ~5;            // Bitwise NOT
$leftShift = 5 << 1;         // Left shift
$rightShift = 5 >> 1;        // Right shift


// String Operators
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName ." ". $lastName; // Concatenation
$fullName .= " Smith"; // Concatenation assignment


// Array Operators
$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$arrayUnion = $array1 + $array2; // Union
$arrayIntersect = array_intersect($array1, $array2); // Intersection


    // Output the results
    echo "<h3>Arithmetic Operators:</h3>"."<br>";
    echo "Sum: $sum". "<br>";
    echo "Difference: $difference". "<br>";
    echo "Product: $product"."<br>";
    echo "Quotient: $quotient". "<br>";
    echo "Remainder: $remainder". "<br>";
    echo "Exponent: $exponent". "<br>";

    
    echo "<h3>Assignment Operators:</h3>". "<br>";
    echo "Assignment: $assignment". "<br>";
    /*echo "Add and Assign: $assignment1". "<br>";
    echo "Subtract and Assign: $assignment2". "<br>";
    echo "Multiply and Assign: $assignment3". "<br>";
    echo "Divide and Assign: $assignment4". "<br>";
    echo "Modulus and Assign: $assignment5". "<br>";*/

    echo "<h3>Comparison Operators:</h3>". "<br>";
    echo "Is Equal: " . ($isEqual ? 'true' : 'false') ."<br>";
    echo "Is Not Equal: " . ($isNotEqual ? 'true' : 'false') . "<br>";
    echo "Is Identical: " . ($isIdentical ? 'true' : 'false') ."<br>";
    echo "Is Not Identical: " . ($isNotIdentical ? 'true' : 'false') ."<br>";
    echo "Is Greater Than: " . ($isGreaterThan ? 'true' : 'false') . "<br>";
    echo "Is Less Than: " . ($isLessThan ? 'true' : 'false') . "<br>";
    echo "Is Greater Than or Equal: " . ($isGreaterThanOrEqual ? 'true' : 'false') . "<br>";
    echo "Is Less Than or Equal: " . ($isLessThanOrEqual ? 'true' : 'false') . "<br>";


    echo "<h3>Logical Operators:</h3>". "<br>";
    echo "Is True: " . ($isTrue ? 'true' : 'false') ."<br>";
    echo "Is False: " . ($isFalse ? 'true' : 'false') ."<br>";
    echo "Is Not True: " . ($isNotTrue ? 'true' : 'false') ."<br>";


    echo "<h3>Bitwise Operators:</h3>". "<br>";
    echo "Bitwise AND: $bitwiseAnd". "<br>";
    echo "Bitwise OR: $bitwiseOr". "<br>";
    echo "Bitwise XOR: $bitwiseXor". "<br>";
    echo "Bitwise NOT: $bitwiseNot". "<br>";
    echo "Left Shift: $leftShift". "<br>";
    echo "Right Shift: $rightShift". "<br>";

    echo "<h3>String Operators:</h3>"."<br>";
    echo "Full Name: $fullName". "<br>";
    echo "Concatenation Assignment: $fullName". "<br>";

    echo "<h3>Array Operators:</h3>"."<br>";
    echo "Array Union: ";
    print_r($arrayUnion);
    echo "<br>"."Array Intersection: "."<br>";
    print_r($arrayIntersect);
    
?>