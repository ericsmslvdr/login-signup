<?php include('./scripts/database.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>
        <?php
        // dynamic web title
        echo $title = isset($_GET['isSignup']) ? 'SignUp' : 'Login';
        ?>
    </title>
    <style>
        body {
            background-color: #f1f2f4;
        }
    </style>
</head>

<body>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">
            <div class="collapse navbar-collapse">
                <a class="navbar-brand" href="#">Login Signup Demo</a>
                <div class="navbar-nav">
                    <a class="nav-link active" href="./index.php">Home</a>
                </div>
            </div>
            <div class="d-flex">
                <span class="text-light">tesdasd</span>
            </div>
        </div>
    </nav>