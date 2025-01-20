<?php
$number = 153; 
$originalNumber = $number;

$length = strlen((string)$number);

$sum = 0;

while ($number > 0) {
    $digit = $number % 10;
    $sum += pow($digit, $length);

       $number = (int)($number / 10);
}

if ($sum == $originalNumber) {
    echo "$originalNumber is an Armstrong number.";
} else {
    echo "$originalNumber is not an Armstrong number.";
}
?>
