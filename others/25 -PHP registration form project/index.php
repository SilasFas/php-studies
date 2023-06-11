<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP registration form project</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>PHP Registration Form</h1>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

            <label for="username">Username: </label>
            <input type="text" name="username" required>

            <label for="password">Username: </label>
            <input type="password" name="password" required>

            <input type="submit" name="submit" value="Register">
        </form>
    </main>
    <section>
        <h2>Result</h2>
        <?php


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

            if (empty($username)) {
                echo "Please enter a username";
            } elseif (empty($password)) {
                echo "Please enter a password";
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (user, password) 
                        VALUES ('$username', '$hash')";
                try {
                    mysqli_query($connection, $sql);
                    echo "You are now registered";
                } catch (mysqli_sql_exception) {
                    echo "That username is taken, Choose another one";
                }
            }
        }
        mysqli_close($connection);
        ?>
    </section>

</body>

</html>