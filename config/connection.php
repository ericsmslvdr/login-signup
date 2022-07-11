<?php
class Connection {
    private $dbHost = 'localhost';
    private $dbUser = 'root';
    private $dbPass = '';
    private $dbName = 'loginsignupdb';

    public function __construct() {
        $conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    }
}

class SignUp {
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