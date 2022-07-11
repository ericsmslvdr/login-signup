<?php include('./components/header.php') ?>

<body>
    <div class="container">
        <div class="formCard">
            <div class="card-title">
                <h1>Sign Up</h1>
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
                <label class="text-form">Repeat Password:</label>
                <br>
                <input type="text" name="password" id="password" class="text-field" placeholder="Enter Password Here">
                <br>
                <label class="text-form">E-mail:</label>
                <br>
                <input type="text" name="email" id="email" class="text-field" placeholder="Enter Email Here">
                <br>
                <label class="text-form">Address:</label>
                <br>
                <input type="text" name="address" id="address" class="text-field" placeholder="Enter Address Here">
                <br>
                <input type="submit" value="Sign Up" class="login-btn">
                <a href="./index.php"><button type="button" class="login-btn">Login</button></a>
            </form>
        </div>
    </div>
</body>

</html>