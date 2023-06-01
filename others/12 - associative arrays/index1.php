<?php

// associative array = An array mode of key=>value pairs
// countries => capitals
// id => username
// item => price


$capitals = array(
    "USA" => "Washington",
    "Japan" => "Kyoto",
    "SouthKorea" => "Seoul",
    "India" => "New Delhi"
);

// echo $capitals["USA"] . "<br><br>";

$capitals["USA"] = "Las Vegas"; // update a key=>value pair
$capitals["China"] = "Beijing";   // add a new key=>value 
array_pop($capitals); // remove the last element
array_shift($capitals); // remove the fisrt 
$keys = array_keys($capitals); // return a new array with only the keys
$values = array_values($capitals);
$capitals = array_flip($capitals);
$capitals = array_reverse($capitals); 
echo count($capitals);

foreach($capitals as $key => $value){
    echo "{$key} = {$value} <br>";
}

echo "<br><br>". "key array" . "<br><br>";

foreach($keys as $key){
    echo $key . "<br>";
}

echo "<br><br>". "value array" . "<br><br>";

foreach($values as $value){
    echo $value . "<br>";
}

echo "<br><br>". "flip function" . "<br><br>";

foreach($capitals as $key => $value){
    echo "{$key} = {$value} <br>";
}
