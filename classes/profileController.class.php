<?php

class ProfileController extends Profile {
    private $userId;

    public function __construct($userId) {
        $this->userId = $userId;
    }

    public function setDefaultProfile() {

        $about = "Welcome to my profile page! Soon I'll be able to tell you more about myself, adn what you can find on my page.";

        $this->setProfile($this->userId, $about);
    }
}