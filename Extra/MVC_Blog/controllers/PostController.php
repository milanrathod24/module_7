<?php
require_once "models/PostModel.php";

class PostController {

    public function index() {
        $posts = (new PostModel())->getAllPosts();
        require "views/list_posts.php";
    }

    public function add() {
        require "views/add_post.php";
    }

    public function store() {
        (new PostModel())->insertPost($_POST['title'], $_POST['content']);
        header("Location: index.php");
    }

    public function edit($id) {
        $post = (new PostModel())->getPostById($id);
        require "views/edit_post.php";
    }

    public function update() {
        (new PostModel())->updatePost(
            $_POST['id'], $_POST['title'], $_POST['content']
        );
        header("Location: index.php");
    }

    public function delete($id) {
        (new PostModel())->deletePost($id);
        header("Location: index.php");
    }
}
?>
