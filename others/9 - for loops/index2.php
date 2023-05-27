<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Counter</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="start">Enter a number to count up from: </label>
            <input type="number" name="start" id="start" required value="1">
            <input type="submit" value="Start">
        </form>
    </main>
    <section>
        <h1>Result</h1>
        <?php
        $counter = $_GET["start"] ?? 0;
        
        for ($i = 1; $i <= $counter; $i++ ) { 
            echo " $i ";
        }
        
        ?>
    </section>
</body>

</html>