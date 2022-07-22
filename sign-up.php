<div class="container d-flex">
    <div class="card m-auto" style="width: 30em;">
        <div class="card-header">
            <h2 class="card-title m-0">Sign Up</h2>
        </div>
        <div class="card-body p-2">
            <form action="" method="POST">
                <label class="form-label mt-2">Username:</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username Here" required>
                <label class="form-label mt-2">Password:</label>
                <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password Here" required>
                <!-- <label class="form-label mt-2">Repeat Password:</label>
                <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password Here"> -->
                <label class="form-label mt-2">E-mail:</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email Here" required>
                <label class="form-label mt-2">Address:</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address Here" required>
                <br>
                <input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
            </form>
        </div>
        <div class="card-footer d-flex justify-content-end align-items-center">
            <p class="text-muted m-0 mx-3"><small>Already Have an Account?</small></p>
            <a href="./index.php"><button type="button" class="btn btn-outline-primary btn-sm">Login</button></a>
        </div>
    </div>
</div>
</body>

</html>