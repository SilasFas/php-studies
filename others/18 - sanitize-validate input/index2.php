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

            $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

            if (empty($age)) {
                echo "That number wasn't valid <br><br>";
            }  else {
                echo "You are $age years old <br><br>";
            }

            if (empty($email)) {
                echo "That email wasn't valid <br><br>";
            }  else {
                echo "Your email is: $email <br><br>";
            }
        }
        ?>
    </section>
</body>

</html>