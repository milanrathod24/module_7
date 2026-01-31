<?php
require_once "config/database.php";

class PostModel {

    public function getAllPosts() {
        return Database::connect()
            ->query("SELECT * FROM posts")
            ->fetchAll();
    }

    public function insertPost($title, $content) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
        $stmt->execute([$title, $content]);
    }

    public function getPostById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM posts WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updatePost($id, $title, $content) {
        $db = Database::connect();
        $stmt = $db->prepare("UPDATE posts SET title=?, content=? WHERE id=?");
        $stmt->execute([$title, $content, $id]);
    }

    public function deletePost($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM posts WHERE id=?");
        $stmt->execute([$id]);
    }
}
?>
