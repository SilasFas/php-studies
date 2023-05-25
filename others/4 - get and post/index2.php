<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza</title>
</head>

<body>
    <?php
    $price = 5.99;
    $quantity = $_REQUEST["quantity"] ?? 1;
    $total = $quantity * $price;
    ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">

        <label for="quantity">Quantity</label> <br>
        <input type="number" name="quantity" id="quantity" value="1">
        <input type="submit" value="Total">
    </form>

    <p>You have ordered <?php echo $quantity ?> pizza/s.</p>
    <p>Your total is: $<?php echo number_format($total, 2, ",", ".")  ?></p>
</body>

</html>