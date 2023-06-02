<?php 
    // isset() = Returns true if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    $username = false;
    if (isset($username)) {
        echo "This variable is set";
    } else {
        echo "This variable is NOT set";
    }
    
echo "<br><br> Empty function <br><br>";

$test = "s";

if (empty($test)) {
    echo "This variable is empty";
} else {
    echo "This variable is NOT empty";
}