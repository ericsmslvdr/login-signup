<?php
// include header
include('./components/header.php');

if (isset($_GET['isSignup'])) {
    // if condition is true include signup.php
    include('./sign-up.php');
} else {
    // if above is not satisfied, include login.php
    include('./log-in.php');
}

// include footer
include('./components/footer.php');



// add check if user account already exists when registering
// add check if user account does not match when logging in
// add alert when registering, loggin in and logging out