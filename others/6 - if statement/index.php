<?php 
    // if statement = if some condition is true, do somthing
    //                if condition is false, don't do it

    $age = 1;
    if ($age >= 18 && $age < 100) {
        echo "You may enter this site";
    } elseif ($age <= 0) {
        echo "That wasn't a valid age";
    } elseif ($age >= 100) {
        echo "You are too old to enter this site";
    }else {
        echo "You must be 18+ to enter <br>";
    }

    $adult = true;
    if ($adult) {
        echo "Let's go";
    } else {
        echo "Hell no"; 
    }
    
?>