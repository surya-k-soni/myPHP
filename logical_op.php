<?php
// Logical Operators in PHP

$a = true;
$b = false;

// AND operator
$result_and = $a && $b; // false

// OR operator
$result_or = $a || $b; // true

// NOT operator
$result_not = !$a; // false

// XOR operator
$result_xor = $a xor $b; // true

    echo "AND operator a && b:: " . ($result_and ? 'true' : 'false') . "<br>";
    echo "OR operator a || b:: " . ($result_or ? 'true' : 'false') . "<br>";
    echo "NOT operator !a:: " . ($result_not ? 'true' : 'false') . "<br>";
    echo "XOR operator a xor b:: " . ($result_xor ? 'true' : 'false') . "<br>";
?>