<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>This is the index 2 page</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>

</html>
<?php

echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index1.php");
}

?>