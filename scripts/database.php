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
    }
}
