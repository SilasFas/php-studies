<?php
// 1. MySQLi Extension
// 2. PDO (PHP Data Objects)

include("database.php");

$username = "Joseph";
$password = "joseph123";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password)
        VALUES ('$username', '$hash')";

try {
    mysqli_query($connection, $sql);
    echo "User is now registered";
} catch (mysqli_sql_exception) {
    echo "Could not register user";
}



mysqli_close($connection); // close a connection (it apears an error message because this variable is in another file, it shoud work just fine)
