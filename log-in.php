<div class="container d-flex">
    <div class="card m-auto" style="width: 30em;">
        <div class="card-header">
            <h2 class="card-title m-0">Login</h2>
        </div>
        <div class="card-body p-2">
            <form action="" method="POST">
                <label class="form-label mt-2">Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username Here" required>
                <label class="form-label mt-2">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password Here" required>
                <br>
                <input type="submit" name="login" value="Login" class="btn btn-primary">
            </form>
        </div>
        <div class="card-footer d-flex justify-content-end align-items-center">
            <p class="text-muted m-0 mx-3"><small>No Account Yet?</small></p>
            <a href="./index.php?isSignup=true"><button type="button" class="btn btn-outline-primary btn-sm">Sign Up</button></a>
        </div>
    </div>
</div>