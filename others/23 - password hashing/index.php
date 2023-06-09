<?php
// hashing = trasnforming sensitive data (password)
//           into letters, numbers, and/or symbols 
//           via a mathematical process. (similar to encryption) 
//           Hides the original data from 3rd parties.

$password = "Silas1+*";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash . "<br><br>";

if (password_verify("pizza123", $hash)) {
    echo "You are logged in";
} else {
    echo "Incorrect password";
}
