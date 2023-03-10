<?php
session_start();
include("connection.php");
include("functions.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $errors = array();


    if (empty($user_name) || empty($password)) {
        echo "Please don't leave the fields empty";
    } else if (is_numeric($user_name)) {
        $errors["numeric"] = "Numeric usernames are not accepted.";
    } else {

        //read from database
        $query = "select * from users where user_name= '$user_name' limit 1";
        $result = mysqli_query($con, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location : home.php");
                    die;
                }
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Login</title>
</head>

<body>
    <div class="container">

        <div class="form-box">
            <h1>Login</h1>

            <form method="post">
                <input id="uname" type="text" required name="user_name" placeholder="Username">
                <br><br>
                <input id="pwd" type="password" name="password" placeholder="Password">
                <br><br>

                <div id="button">
                    <input id="button" type="submit" value="Login"><br><br>
                </div>

                <div class="redirect">
                    <p>New here ? <a href="signup.php">Sign Up</a></p><br><br>
                </div>

            </form>
        </div>
    </div>

</body>

</html>