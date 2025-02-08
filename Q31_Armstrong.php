<?php

$number = 153;
$sum = 0;
$originalNumber = $number;

while ($number != 0) {
    $digit = $number % 10;
    $sum += $digit * $digit * $digit;
    $number = (int)($number / 10);
}

if ($sum == $originalNumber) {
    echo "$originalNumber is an Armstrong number.\n";
} else {
    echo "$originalNumber is not an Armstrong number.\n";
}

echo "This code is executed by Kamal Mittal!";
?>
