<!DOCTYPE html>
<html>
<head>
    <title>PHP with HTML Example</title>
</head>
<body>
    <h1 style='color:blue'>Welcome Surya!</h1>
    <p>
        <?php
            $date = date("Y-m-d H:i:s");
            
            echo "<h1 style='color:green'>PHP with HTML tag!</h1>";
            echo "<p>This is a paragraph rendered by PHP.</p>";
            echo "<p>Today's date is " .  $date. ".</p>";
            echo "Timezone:" .date_default_timezone_get();
        ?>
    </p>
</body>
</html>