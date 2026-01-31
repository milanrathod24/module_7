<?php
require_once "config/database.php";

class UserModel {

    public function getAllUsers() {
        return Database::connect()
            ->query("SELECT * FROM users")
            ->fetchAll();
    }

    public function insertUser($name, $email) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO users VALUES (NULL, ?, ?)");
        $stmt->execute([$name, $email]);
    }

    public function getUserById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM users WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateUser($id, $name, $email) {
        $db = Database::connect();
        $stmt = $db->prepare("UPDATE users SET name=?, email=? WHERE id=?");
        $stmt->execute([$name, $email, $id]);
    }

    public function deleteUser($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM users WHERE id=?");
        $stmt->execute([$id]);
    }
}
?>
