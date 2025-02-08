<?php
$num1 = 36;
$num2 = 60;

while ($num2 != 0) {
    $temp = $num2;
    $num2 = $num1 % $num2;
    $num1 = $temp;
}

echo "The HCF is: $num1\n";
echo "This code is executed by Kamal Mittal!";
?>
