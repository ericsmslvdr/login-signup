<?php include('./components/header.php') ?>

<body>
    <div class="container">
        <div class="card">
            <h2 class="card-title">Sign Up</h2>
            <form action="" method="POST">
                <label class="form-label mt-2">Username:</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username Here">
                <label class="form-label mt-2">Password:</label>
                <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password Here">
                <label class="form-label mt-2">Repeat Password:</label>
                <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password Here">
                <label class="form-label mt-2">E-mail:</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email Here">
                <label class="form-label mt-2">Address:</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address Here">
                <input type="submit" class="btn btn-primary" value="Sign Up">
                <a href="./index.php"><button type="button" class="btn btn-outline-primary">Login</button></a>
            </form>
        </div>
    </div>
</body>

</html>