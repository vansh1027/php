<?php

$numbers = [10, 25, 8, 100, 45, 99];

$max = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i]; 
    }
}

echo "The biggest number is: $max\n";
echo "This code is executed by Kamal Mittal!";
?>
