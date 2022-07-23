<?php
// Connect Database
class DatabaseConn {

    public function connect() {
        $dbHost = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $dbName = 'loginsignupdb';

        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}

// Signup User
class SignUp extends DatabaseConn {
    private $username;
    private $password;
    private $email;
    private $address;

    public function __construct($user, $pass, $email, $addr) {
        $this->username = $user;
        $this->password = $pass;
        $this->email = $email;
        $this->address = $addr;

        $isAccTaken = $this->isAccTaken();

        $this->signupAcc($isAccTaken);
    }

    public function isAccTaken() {
        $sql = "SELECT username, email
                FROM userTbl
                WHERE username = '$this->username'
                OR email = '$this->email';";

        $result = $this->connect()->query($sql);
        $data = $result->fetch_assoc();

        if (!empty($data)) {
            if ($this->username == $data['username'] || $this->email == $data['email']) {
                return true;
            }
        }
    }

    public function signupAcc($isAccTaken) {
        if (!$isAccTaken) {
            $sql = "INSERT INTO userTbl (username, password, email, address)
                    VALUES ('$this->username','$this->password', '$this->email', '$this->address');";

            $this->connect()->query($sql);

            echo '
                <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
                    <strong>Congrats🥳!</strong> Account Successfully Registered...
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            ';
        } else {
            echo '
                <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
                    <strong>Sorry😕</strong> Username or Email Already Taken! Try another one😅
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            ';
        }
    }
}

if (isset($_POST['signup'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $addr = $_POST['address'];

    new SignUp($user, $pass, $email, $addr);
}

// Login User
class Login extends DatabaseConn {
    private $username;
    private $password;

    public function __construct($user, $pass) {
        $this->username = $user;
        $this->password = $pass;

        $sql = "SELECT username, password
                FROM userTbl
                WHERE username = '$this->username';";

        $result = $this->connect()->query($sql);
        $data = $result->fetch_assoc();
        $ableToLogin = $this->checkUserAcc($data);

        $this->performLogin($ableToLogin, $data);
    }

    public function checkUserAcc($data) {
        if (!empty($data)) {
            if ($this->username != $data['username'] || $this->password != $data['password']) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
                        <strong>Luh🤔? nigagawamu!</strong> Invalid username or password. Try again🙈.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                ';
                return false;
            } else {
                return true;
            }
        }
        echo '
            <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
                <strong>Luh🤔? nigagawamu!</strong> Account Does not exist!. Sign up first🙈.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        ';
    }

    public function performLogin($ableToLogin, $data) {
        if ($ableToLogin) {
            $_SESSION['username'] = $data['username'];
            header('location: ./welcome.php?isLoggedIn=true');
        }
    }
}

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    new Login($user, $pass);
}

// Logout user
if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
    header('location: ./index.php');
    exit();
}
