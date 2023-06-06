<?php

// session = it is a Super Global variable 
//           used to store information on a user 
//           to be used across multiple pages. 
//           A user is assigned a session-id 
//           ex. login credentials

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="username">username:</label>
            <input type="text" name="username" id="username">

            <label for="username">password:</label>
            <input type="password" name="password" id="password">

            <input type="submit" name="login" value="Log in">
        </form>
    </main>

    <section>
        <h1>Result</h1>
        <?php

        if (isset($_POST["login"])) {

            if (
                !empty($_POST["username"]) &&
                !empty($_POST["password"])
            ) {

                $_SESSION["username"] = $_POST["username"];
                $_SESSION["password"] = $_POST["password"];

                header("Location: index2.php");
            } else {
                echo "Missing username or password <br>";
            }
        }
        ?>
    </section>
</body>

</html>