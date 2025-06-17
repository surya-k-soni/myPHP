<?php
    // If statement
    $age = 20;
    if ($age >= 18) {
        echo "You are an adult.\n";
    }

    // If-else statement
    $score = 75;
    if ($score >= 60) {
        echo "You passed.\n";
    } else {
        echo "You failed.\n";
    }

    // If-elseif-else statement
    $day = "Sunday";
    if ($day == "Saturday" || $day == "Sunday") {
        echo "It's the weekend!\n";
    } elseif ($day == "Friday") {
        echo "Almost the weekend!"."\n";
    } else {
        echo "It's a weekday.";
    }

    // Switch statement
    $color = "red";
    switch ($color) {
        case "red":
            echo "Color is red.";
            break;
        case "blue":
            echo "Color is blue.";
            break;
        default:
            echo "Color is neither red nor blue.";
            break;
    }
    // Ternary operator
    $is_logged_in = false;
    $message = $is_logged_in ? "Welcome back!" : "Please log in.";
    echo $message . "\n";
?>