<?php
// array = "variable" witch can hold one value at a time

// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
// echo $foods[2] . "<br><br>";

$foods = array("apple", "orange", "banana", "coconut");

// $foods[0] = "pineapple"; // rename the value
// array_push($foods, "pear", "lime"); // add a new value at the end
// array_pop($foods); // remove the last value 
// array_shift($foods); // remove the first value
// $foods = array_reverse($foods); // reverse the position of the array
// echo count($foods); // count the elements of the array

foreach ($foods as $food) {
    echo $food . "<br>";
}

