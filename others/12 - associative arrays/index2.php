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
    <?php
    $capitals = array(
        "USA" => "Washington",
        "Japan" => "Kyoto",
        "SouthKorea" => "Seoul",
        "India" => "New Delhi"
    );
    $capital = $capitals[$_GET["country"] ?? ""];
    ?>
    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="country">Enter a country</label>
            <input type="text" name="country">
            <input type="submit" value="Enter">
        </form>
    </main>
    <section>
        <p>The capital is <strong><?php echo $capital ?></strong></p>
    </section>
</body>

</html>