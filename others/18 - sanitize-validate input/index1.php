<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize Input</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Sanitize Input</h1>
        <form action="" method="post">
            Username: <br>
            <input type="text" name="username" id="username"> <br>

            Age: <br>
            <input type="text" name="age" id="age"> <br>

            E-mail: <br>
            <input type="text" name="email" id="email"> <br>




            <input type="submit" name="login" value="Login"> <br>


        </form>
    </main>
    <section>
        <?php
        if (isset($_POST["login"])) {

            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            echo "hello $username";

            $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
            echo "You are $age years old";

            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            echo "Your email is: $email";
        }
        ?>
    </section>
</body>

</html>