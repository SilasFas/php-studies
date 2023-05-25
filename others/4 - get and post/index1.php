<?php
// $_GET, $_POST = special variables used to collect data from an HTML form 
//                 data is sent to the file in the action attibute of <form>
//                 <form action="some_file.php" method="get"></form>

// $_GET = Data is appended to the url
//         NOT SECURE
//         char limit
//         Bookmark is possible with values
//         GET requests can be cached
//         Better for a search page

// $_POST = Data is packaged inside the body of the HTTP request
//          MORE SECURE
//          No data limit
//          Cannot bookmark
//          GET requests are not cached
//          Better for submitting credentials
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
</head>

<body>
    <form action="index1.php" method="get">

        <label for="username">Username: </label> <br>
        <input type="text" name="username" id="username"> <br>

        <label for="password">Password: </label> <br>
        <input type="password" name="password" id="password"> <br>

        <input type="submit" value="Enter">

    </form>
</body>

</html>

<?php
echo $_GET["username"] ?? "" . "<br>";
echo $_GET["password"] ?? "" . "<br>";
?>