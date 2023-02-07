<?php

class ProfileView extends Profile {

    //users 
    public function fetchUserLogin($userUuid) {
        $user = $this->getUser($userUuid);

        echo $user[0]["user_login"];
    }
    
    //user_profile
    public function fetchProfileFirstname($userUuid) {
        $profile = $this->getUserProfile($userUuid);

        echo $profile[0]["user_firstname"];
    }

    public function fetchProfileLastname($userUuid) {
        $profile = $this->getUserProfile($userUuid);

        echo $profile[0]["user_lastname"];
    }

    public function fetchProfileImage($userUuid) {
        $profile = $this->getUserProfile($userUuid);

        echo $profile[0]["user_image"];
    }

    public function fetchProfileQrcode($userUuid) {
        $profile = $this->getUserProfile($userUuid);

        echo $profile[0]["user_qrcode"];
    }

    public function fetchProfileAbout($userUuid) {
        $profile = $this->getUserProfile($userUuid);

        echo $profile[0]["user_about"];
    }

    //user_data
    public function fetchDataRank($userUuid) {
        $profile = $this->getUserData($userUuid);

        echo $profile[0]["user_rank"];
    }

    public function fetchDataMissions($userUuid) {
        $profile = $this->getUserData($userUuid);

        echo $profile[0]["user_missions"];
    }

    public function fetchDataTrainings($userUuid) {
        $profile = $this->getUserData($userUuid);

        echo $profile[0]["user_trainings"];
    }

    public function fetchDataTvt($userUuid) {
        $profile = $this->getUserData($userUuid);

        echo $profile[0]["user_tvt"];
    }

    public function fetchDataTl($userUuid) {
        $profile = $this->getUserData($userUuid);

        echo $profile[0]["user_pl"];
    }

    public function fetchDataSl($userUuid) {
        $profile = $this->getUserData($userUuid);

        echo $profile[0]["user_sl"];
    }

    public function fetchDataPl($userUuid) {
        $profile = $this->getUserData($userUuid);

        echo $profile[0]["user_tl"];
    }

    public function fetchDataRtb($userUuid) {
        $profile = $this->getUserData($userUuid);

        echo $profile[0]["user_rtb"];
    }

    public function fetchDataKia($userUuid) {
        $profile = $this->getUserData($userUuid);

        echo $profile[0]["user_kia"];
    }

    public function fetchDataMia($userUuid) {
        $profile = $this->getUserData($userUuid);

        echo $profile[0]["user_mia"];
    }
}