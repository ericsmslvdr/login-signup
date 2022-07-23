<?php
include('./components/header.php');

// prevent user from going to this page without even loggin in
if (!isset($_SESSION['username'])) {
    header('location: ./index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?= $_SESSION['username']; ?></title>
</head>

<body>
    <div class="container d-flex">
        <h1 class="m-auto">Welcome <?= $_SESSION['username']; ?></h1>
    </div>
</body>

</html>