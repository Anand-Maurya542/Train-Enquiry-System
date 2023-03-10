<?php
session_start();
include("connection.php");
include("requests.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //something was posted
    $trainNum = $_POST["trainNum"];
    if (empty($trainNum)  || strlen($trainNum)!==5) {
        $error = "Please check the train number that you entered.";
    }
    else {

        $data=searchAboutTrain($trainNum);
        echo $data;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> Safar-Train Enquiry System</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link disabled"></a>
                    </li>
                </ul>
                <div class="container">
                    <a class="navbar-brand" href="logout.php">
                        <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="form-box">
            <h1>Search About Train</h1>
            <form method="post">
                <input id="Enter the Train Number:" type="text" required name="trainNum" placeholder="Train Number">
                <div id="button">
                    <input id="button" type="submit" value="Go!"><br><br>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</body>

</html>