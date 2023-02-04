<?php

class ProfileView extends Profile {
    
    public function fetchProfileFirstname($userUuid) {
        $profile = $this->getProfile($userUuid);

        echo $profile[0]["user_firstname"];
    }

    public function fetchProfileLastname($userUuid) {
        $profile = $this->getProfile($userUuid);

        echo $profile[0]["user_lastname"];
    }
}