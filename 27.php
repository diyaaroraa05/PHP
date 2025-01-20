<?php

$array = [10, 69, 5, 18, 11, 9, 1];

$biggestNumber = $array[0];  

for ($i = 1; $i < count($array); $i++) {

    if ($array[$i] > $biggestNumber) {
        $biggestNumber = $array[$i];
    }
}


echo "The biggest number in the array is: " . $biggestNumber;
echo"<br>";
echo("This program is written and executed by Diya Arora (2220100252)");
?>

