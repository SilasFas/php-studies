<?php 
    //variable = a reusable container that holds data (string, integer, float. boolean) 
    
    //string
    $name = "Silas Fas";
    $food = "pizza";
    
    //integer (int)
    $email = "silasfas@hotmail.com";
    $age = 21;

    //float
    $gpa = 2.5;
    $price = 48.12;

    //boolean
    $employed = true; // display number 1
    $online = false; //  display nothing

    echo "Hello {$name} <br>"; 
    echo "You like {$food} <br>";

    echo "My email is $email <br>";
    echo "You are $age years old <br>";
    echo "You gpa is $gpa <br>";
    echo "Your pizza is $$price <br>";
    echo "Your pizza is \${$price} <br>";
    
    echo "Online status: {$online} <br>";
    echo "Employment status: {$employed} <br>";

    echo "The $food is $price dollars <br>" ;

    $sum = null;
    echo $sum = $age * $gpa;
    echo "<br>The sum is $sum";
?>