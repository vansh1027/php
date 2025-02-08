<?php
// Define the number of rows
$rows = 8;

// Loop to print the pattern
for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "* ";
    }
    echo "\n";
}

echo "This code is executed by Kamal Mittal!";
?>
