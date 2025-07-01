<?php
// Example of using goto statement in PHP

$number = 1;

goto skip;

echo "This will not be printed.";

skip:
echo "Goto statement jumped to this label.\n";
?>