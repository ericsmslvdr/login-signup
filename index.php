<?php include('./components/header.php') ?>

<body>
    <div class="container">
        <div class="section">
            <div class="formCard">
                <div class="card-title">
                    <h1>Login</h1>
                    <hr>
                </div>
                <form action="" method="POST">
                    <label class="text-form">Username:</label>
                    <br>
                    <input type="text" name="username" id="username" class="text-field" placeholder="Enter Username Here">
                    <br>
                    <label class="text-form">Password:</label>
                    <br>
                    <input type="text" name="password" id="password" class="text-field" placeholder="Enter Password Here">
                    <br>
                    <input type="submit" value="Login" class="login-btn">
                    <a href="./signUp.php"><button type="button" class="login-btn">Sign Up</button></a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>