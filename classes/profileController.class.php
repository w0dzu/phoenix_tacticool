<?php

class ProfileController extends Profile {
    private $userUuid;

    public function __construct($userUuid) {
        $this->userUuid = $userUuid;
    }

    public function setDefaultProfile() {

        $about = "Welcome to my profile page! Soon I'll be able to tell you more about myself, adn what you can find on my page.";

        $this->setProfile($this->userUuid, $about);
    }
}