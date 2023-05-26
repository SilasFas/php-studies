<?php
// Logigal operators = combine conditional statements
// if (conditional && conditional2)

// && = True if both conditional are true
// || = True if at leat one conditional is true
// !  = True if false. False if true 

$temp = 15;
if ($temp >= 0 && $temp <= 30) {
    echo "The weather is good <br>";
} else {
    echo "The weather is bad <br>";
}

$temp2 = 100;
if ($temp2 < 0 || $temp2 > 30) {
    echo "The weather is bad <br>";
} else {
    echo "The weather is good <br>";
}

$cloudy = true;

if (!$cloudy) {
    echo "It's sunny";
} else {
    echo "It's cloudy";
}
