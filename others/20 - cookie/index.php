<?php
// cookie = Information about a user stored in a user's web-browser 
//          targeted advertisements, browsing preferences, and
//          other non-sensitive data

setcookie("favorite_food", "pizza", time() + 86400 * 2, "/");
setcookie("favorite_drink", "coffee", time() - 0, "/");
setcookie("favorite_dessert", "ice-cream", time() + 86400 * 4, "/");

foreach ($_COOKIE as $key => $value) {
    echo "{$key} = {$value} <br>";
}

if (isset($_COOKIE["favorite_food"])) {
    echo "Buy some {$_COOKIE["favorite_food"]}";
} else {
    echo "I don't know your favorite food";
}
