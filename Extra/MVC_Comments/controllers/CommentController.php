<?php
require_once "models/CommentModel.php";

class CommentController {

    public function index() {
        $comments = (new CommentModel())->getAllComments();
        require "views/list_comments.php";
    }

    public function add() {
        require "views/add_comment.php";
    }

    public function store() {
        (new CommentModel())->insertComment($_POST['comment']);
        header("Location: index.php");
    }

    public function edit($id) {
        $comment = (new CommentModel())->getCommentById($id);
        require "views/edit_comment.php";
    }

    public function update() {
        (new CommentModel())->updateComment(
            $_POST['id'],
            $_POST['comment']
        );
        header("Location: index.php");
    }

    public function delete($id) {
        (new CommentModel())->deleteComment($id);
        header("Location: index.php");
    }
}
?>
