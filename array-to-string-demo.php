<?php
// Sample array
$user = [
    'name' => 'SK',
    'age' => 29,
    'skills' => ['PHP', 'MySQL', 'JavaScript', 'Laravel', 'OOPs']
];

// ❌ 1. Incorrect: Direct echo of array
echo "<h3>1. Incorrect Usage (Will Cause Warning):</h3>";
echo $user;  // This will trigger "Array to string conversion" warning

echo "<hr>";

// ✅ 2. Use print_r() for debugging
echo "<h3>2. Correct - Use print_r():</h3>";
echo "<pre>";
print_r($user);
echo "</pre>";

echo "<hr>";

// ✅ 3. Use var_dump() for more detail
echo "<h3>3. Correct - Use var_dump():</h3>";
echo "<pre>";
var_dump($user);
echo "</pre>";

echo "<hr>";

// ✅ 4. Access individual element
echo "<h3>4. Access Specific Value:</h3>";
echo "Name: " . $user['name'];  // Output: SK

echo "<hr>";

// ✅ 5. Convert array to string using implode()
echo "<h3>5. Implode Array (skills):</h3>";
echo "Skills: " . implode(", ", $user['skills']);  // Output: PHP, MySQL, JavaScript

echo "<hr>";

// ✅ 6. Use json_encode() for structured output
echo "<h3>6. Convert Entire Array to JSON String:</h3>";
echo json_encode($user);  // Output: {"name":"SK","age":25,"skills":["PHP","MySQL","JavaScript"]}

echo "<hr>";

// ✅ 7. Safe check before using variable as string
echo "<h3>7. Safe Check Example:</h3>";
$test = ['a', 'b', 'c'];

if (is_array($test)) {
    echo implode(" | ", $test);  // Output: a | b | c
} else {
    echo $test;
}
?>


