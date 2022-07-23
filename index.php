<?php
// include header
include('./components/header.php');

// if logged in, immediately get back to welcome page when home is clicked
if (isset($_SESSION['username'])) {
    header('location: ./welcome.php');
}

if (isset($_GET['isSignup'])) {
    // if condition is true include signup.php
    include('./sign-up.php');
} else {
    // if above is not satisfied, include login.php
    include('./log-in.php');
}

// include footer
include('./components/footer.php');