<?php
$num1 = 56; // First number
$num2 = 98; // Second number

$min = ($num1 < $num2) ? $num1 : $num2;

for ($i = $min; $i >= 1; $i--) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i;
        break;
    }
}

echo "The HCF of $num1 and $num2 is $hcf";
?>
