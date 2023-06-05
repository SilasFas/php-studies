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
        <form action="" method="post">
            <input type="radio" name="credit" id="visa" value="visa"> Visa <br>

            <input type="radio" name="credit" id="visa" value="masterCard"> Master Card<br>

            <input type="radio" name="credit" id="visa" value="americanExpress"> American Express <br>

            <input type="submit" name="confirm" id="enter" value="Confirm">
        </form>
    </main>
    <section>
        <?php

        if (isset($_POST["confirm"])) { // if we press/set the submit button


            if (isset($_POST["credit"])) { // if we press/set the radio button
                $credit = $_POST["credit"]; // assign the variable

                switch ($credit) {
                    case 'visa':
                        echo "You selected Visa";
                        break;

                    case 'masterCard':
                        echo "You selected Master Card";
                        break;

                    case 'americanExpress';
                        echo "You selected American Express";
                        break;
                }
            } else {
                echo "Please, select an option!";
            }
        }
        ?>
    </section>
</body>

</html>