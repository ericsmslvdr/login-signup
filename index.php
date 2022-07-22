<?php
// include header
include('./components/header.php');

// if condition is true include signup.php then skip
if (isset($_GET['isSignup'])) {
    include('./sign-up.php');
    return;
}

// if above is not satisfied, include login.php
include('./log-in.php');
