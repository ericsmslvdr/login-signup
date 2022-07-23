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

        $sql = "INSERT INTO userTbl (username, password, email, address)
                VALUES ('$this->username','$this->password', '$this->email', '$this->address');";

        $stmt = $this->connect()->query($sql);
        if ($stmt == true) {
            $this->connect()->close();
        }
    }
}

if (isset($_POST['signup'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $addr = $_POST['address'];

    $insert = new SignUp($user, $pass, $email, $addr);
}

// Login User
class Login extends DatabaseConn {
    private $user;
    private $pass;

    public function __construct($user, $pass) {
        $this->user = $user;
        $this->pass = $pass;

        $sql = "SELECT username, password
                        FROM userTbl
                        WHERE username = '$this->user';";
        $result = $this->connect()->query($sql);
        print_r($user = $this->checkUserAcc($result));

        // $this->performLogin($user);
    }

    public function checkUserAcc($result) {
        $data = $result->fetch_all(MYSQLI_ASSOC);
        if (!empty($data)) {
            return $data;
        } else {
            echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Luh!</strong> You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
        }
    }

    // public function performLogin($checkUserAcc, $data) {
    //     if ($checkUserAcc) {
    //         $_SESSION['username'] = $data[0]['username'];
    //         header('location: ./welcome.php?isLoggedIn=true');
    //     }
    // }
}

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $select = new Login($user, $pass);
}

// Logout user
if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
    header('location: ./index.php');
    exit();
}
