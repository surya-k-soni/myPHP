<?php 
/*
    // While loop
        $i = 1;
        while ($i <= 5) {
            echo "While loop iteration: $i<br>";
            $i++;
        }
*/
/*
    // Do-while loop
        $j = 1;
        do {
            echo "Do-while loop iteration: $j<br>";
            $j++;
        } while ($j <= 5);
        // Output:
        // Do-while loop iteration: 1
        // Do-while loop iteration: 2
        // Do-while loop iteration: 3
        // Do-while loop iteration: 4
        // Do-while loop iteration: 5
        // Note: The do-while loop executes at least once, even if the condition is false initially.
*/

    // Do-while loop
        $j = 10;
        do {
            echo "Do-while loop iteration: $j<br>";
            $j--;
        } while ($j >= 0);

/*
    // For loop
        for ($k = 1; $k <= 5; $k++) {
            echo "For loop iteration: $k<br>";
        }


    // Foreach loop (for arrays)
        // $colors = ["red", "green", "blue"];
        // foreach ($colors as $color) {
        //     echo "Foreach loop value: $color<br>";
        // }

    
    // Print numbers 1 to 5, but stop at 3
    for ($i = 1; $i <= 5; $i++) { 
        if ($i == 3) {
            break; // exits the loop when $i is 3
        }
        echo $i . " <br>";
    }
    // Output: 1 2

    // Print numbers 1 to 5, but skip 3
    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) {
            continue; // skips the rest of the loop when $i is 3
        }
        echo $i . "<br>";
    }
    // Output: 1 2 4 5


    // Nested loop example
    echo "<br>Nested Loop Example:<br>";
    // This will print combinations of outer and inner loop variables
    // Outer loop runs 3 times, inner loop runs 2 times
    for ($i = 1; $i <= 3; $i++) {
        //echo "Outer loop iteration: $i<br>";
        for ($j = 1; $j <= 3; $j++) {

            echo "$i,$j<br>";

        }
    }
    // Output:
    // 1,1
    // 1,2
    // 2,1
    // 2,2
    // 3,1
    // 3,2
*/
?>

