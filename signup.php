<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //something was posted
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $error=" ";

    if (empty($user_name) || empty($password) || is_numeric($user_name)) {
        $error="Please check the values entered.";
    } 

    //if () {
          //check for duplicates in the database 

    //} 
    else {
       
        //generating userId
        $text = "";
        $len = rand(4, 20);
        for ($i = 0; $i < $len; $i++) {
            $text .= rand(0, 9);
        }

        //save to databse
        $user_id = $text;
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
        if(mysqli_query($con, $query))
        {
            echo"<script>alert('Sign Up successful')</script>";
            header("Location : login.php");
            die;
        }
        else
        {
            header("Location : signup.php");
        }
        
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="container">

        <div class="form-box">
          <h1>Signup</h1>

          <form method="post">
                <input id="uname" type="text"  required name="user_name" placeholder="Username">
                <br><br>
                <input id="pwd"  type="password" name="password" placeholder="Password">
                <br><br>

            <div id="button">
            <input  id="button" type="submit" value="Sign Up"><br><br>
            </div>

            <div class="redirect">
            <p>Visited before ? <a href="login.php">Login</a></p><br><br>
            </div>

          </form>
        </div>
    </div>

</body>

</html>