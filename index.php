<?php
session_start();
include("coonection.php");
include("functions.php");
$user_data=check_login($con);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>This is the index page</h1>

    <br>
    <p>Hello</p>
</body>

</html>