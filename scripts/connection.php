<?php
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
        echo "Connected successfully";
    }
}

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

        $testing = new Connection();

        $stmt = $testing->conn->query();
    }
}

echo $test = new SignUp('test', 'test2', 'test3', 'test3');