<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math functions</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="x">X:</label>
            <input type="number" name="x" id="x">

            <label for="x">Y:</label>
            <input type="number" name="y" id="y">

            <label for="z">Y:</label>
            <input type="number" name="z" id="z">

            <input type="submit" value="Total">
        </form>
    </main>
    <section>
        <?php
        $x = $_GET["x"] ?? 1;
        $y = $_GET["y"] ?? 1;
        $z = $_GET["z"] ?? 1;
        //$total = abs($x); // return an asolut value
        //$total = round($x); // around number
        //$total = floor($x); // around down
        //$total = ceil($x); // around up
        //$total = pow($x, $y);
        //$total = sqrt($x);
        //$total = max($x, $y,  $z); // returns the greatest value
        //$total = min($x, $y,  $z); // returns the minimum value
        //$total = pi(); // returns the pi
        $total = rand(); // returns a random number
        $total = rand(1, 10); // returns a random number between 1 and 10
        echo $total;
        ?>
    </section>
</body>

</html>