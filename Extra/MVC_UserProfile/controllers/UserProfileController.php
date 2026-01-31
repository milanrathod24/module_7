<?php
require_once "models/UserProfileModel.php";

class UserProfileController {

    public function showProfile() {
        $model = new UserProfileModel();
        $user = $model->getUserProfile();
        require "views/user_profile_view.php";
    }
}
?>
