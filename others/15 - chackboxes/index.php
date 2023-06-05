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
            <input type="checkbox" name="foods[]" value="Pizza"> Pizza <br>

            <input type="checkbox" name="foods[]" value="Hamburger"> Hamburger <br>

            <input type="checkbox" name="foods[]" value="Hotdog"> Hotdog <br>

            <input type="checkbox" name="foods[]" value="Taco"> Taco <br>

            <input type="submit" name="submit" value="submit">
        </form>
    </main>
    <section>
        <?php
        if (isset($_POST["submit"])) {

            $foods = $_POST["foods"];
            
            foreach ($foods as $food) {
                echo $food . "<br>";
            }
        }
        ?>
    </section>
</body>

</html>