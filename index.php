<?php
// include header
include('./components/header.php');

// if logged in, immediately get back to welcome page when home is clicked
if (isset($_SESSION['username'])) {
    include('./welcome.php');
    exit();
}

if (isset($_GET['isSignup'])) {
    // if condition is true show signup form
    include('./sign-up.php');
} else {
    // if above is not satisfied, show login form
    include('./log-in.php');
}

// include footer
include('./components/footer.php');