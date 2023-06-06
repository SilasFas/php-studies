<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        Name:
        <input type="text" name="name" id="name">
        <input type="submit" value="submit">
    </form>
</body>

</html>



<?php

// $_SERVER = it is a Super Global variable 
//            that contains header, paths, and script locations.
//            The entries in this array are created by the web server.
//            Shows nearly everything you need to know about the current web page environment .

// foreach ($_SERVER as $key => $value) {
//     echo "{$key} => {$value} <br>";
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Hello";
}
?>