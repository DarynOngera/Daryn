<?php

require_once 'dbConnect.php';
class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function store($name, $email) {
        $stmt = $this->conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $email);
        $stmt->execute();
        $stmt->close();
    }

    public function readAll() {
        $result = $this->conn->query("SELECT * FROM users");

        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }
}
?>
