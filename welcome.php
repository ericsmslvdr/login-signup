<?php
// prevent user from going to this page without even loggin in
if (!isset($_SESSION['username'])) {
    header('location: ./index.php');
    exit();
}
?>

<body>
    <div class="container d-flex">
        <h1 class="m-auto">Welcome <?= $_SESSION['username']; ?> 👋</h1>
    </div>