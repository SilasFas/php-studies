<?php
// 1. MySQLi Extension
// 2. PDO (PHP Data Objects)

include("database.php");


// inserting user in database

// $username = "Amanda";
// $password = "amanda123";
// $hash = password_hash($password, PASSWORD_DEFAULT);

// $sql = "INSERT INTO users (user, password)
//         VALUES ('$username', '$hash')";

// try {
//     mysqli_query($connection, $sql);
//     echo "User is now registered";
// } catch (mysqli_sql_exception) {
//     echo "Could not register user";
// }

// ...

// $sql = "SELECT * FROM users WHERE user = 'Pedro'";
// $result = mysqli_query($connection, $sql);

// if (mysqli_num_rows($result) > 0) {
//     $row = mysqli_fetch_assoc($result);
//     echo $row["id"] . "<br>";
//     echo $row["user"] . "<br>";
//     echo $row["password"] . "<br>";
//     echo $row["register_data"] . "<br>";
// }else {
//     echo "No user found";
// }


$sql = "SELECT * FROM users";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["password"] . "<br>";
        echo $row["register_data"] . "<br>";
    };
} else {
    echo "No user found";
}

mysqli_close($connection); // close a connection (it apears an error message because this variable is in another file, but it shoud work just fine)
