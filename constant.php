<?php
    // Define a constant in PHP
    define('SITE_NAME', 'https://outlier.ai/');
    const SITE_NEWNAME = 'outlier.ai/'; // This will cause an error because constants cannot be redefined

    // Using the constant
    echo "My website name is: ". SITE_NAME;
    echo "<br>";
    echo "My new website name is: ". SITE_NEWNAME;
    echo "<br>";
    // Attempting to redefine a constant will result in an error
    // define('SITE_NAME', 'https://newsite.com/'); // Uncommenting this line will cause an error
    // Constants are case-sensitive by default
?>