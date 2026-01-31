<?php
require_once "models/UserModel.php";

class UserController {

    public function index() {
        $users = (new UserModel())->getAllUsers();
        require "views/list_users.php";
    }

    public function add() {
        require "views/add_user.php";
    }

    public function store() {
        (new UserModel())->insertUser($_POST['name'], $_POST['email']);
        header("Location: index.php");
    }

    public function edit($id) {
        $user = (new UserModel())->getUserById($id);
        require "views/edit_user.php";
    }

    public function update() {
        (new UserModel())->updateUser(
            $_POST['id'], $_POST['name'], $_POST['email']
        );
        header("Location: index.php");
    }

    public function delete($id) {
        (new UserModel())->deleteUser($id);
        header("Location: index.php");
    }
}
?>
