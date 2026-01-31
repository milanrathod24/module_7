<?php
require_once "config/database.php";

class CommentModel {

    public function getAllComments() {
        return Database::connect()
            ->query("SELECT * FROM comments")
            ->fetchAll();
    }

    public function insertComment($comment) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO comments (comment) VALUES (?)");
        $stmt->execute([$comment]);
    }

    public function getCommentById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM comments WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateComment($id, $comment) {
        $db = Database::connect();
        $stmt = $db->prepare("UPDATE comments SET comment=? WHERE id=?");
        $stmt->execute([$comment, $id]);
    }

    public function deleteComment($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM comments WHERE id=?");
        $stmt->execute([$id]);
    }
}
?>
