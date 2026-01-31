<?php
class UserProfileModel {

    public function getUserProfile() {
        // Normally data comes from database
        return [
            "name" => "Milan",
            "email" => "milan@gmail.com",
            "age" => 21
        ];
    }
}
?>
