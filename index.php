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

// add check if user account already exists when registering
// add check if user account does not match when logging in
// add alert when registering, loggin in, logging out