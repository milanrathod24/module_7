<?php
require_once "models/UserModel.php";

class UserController {

    public function showUser() {
        $model = new UserModel();
        $username = $model->getUserName();
        require "views/userView.php";
    }
}
?>
