<?php

class ProfileController extends Profile {
    private $userUuid;

    public function __construct($userUuid) {
        $this->userUuid = $userUuid;
    }

    public function setDefaultProfile() {

        $userImage = "images/default/profile_image.png";
        $userQrcode = "images/default/qrcode.png";
        $userAbout = "Welcome to my profile page! Soon I'll be able to tell you more about myself, adn what you can find on my page.";

        $this->setProfile($this->userUuid, $userImage, $userQrcode, $userAbout);
    }
}