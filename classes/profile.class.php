<?php

class Profile extends Dbh {

    protected function setProfile($userId, $userAbout) {
        $sql = 'INSERT INTO users_profile (user_id, user_about) VALUES (?, ?)';
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute(array($userId, $userAbout))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }

        $stmt = null;
    }

    protected function getProfile ($userId) {
        $sql = 'SELECT * FROM user_profile WHERE user_id = ?;';
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute(array($userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }

        $profile = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profile;
    }

    protected function updateProfileFirstname($userId, $firstname) {
        $sql = 'UPDATE users_profiles SET user_firstname = ? WHERE user_id = ?;';
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute(array($firstname, $userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }
        $stmt = null;
    }

    protected function updateProfileLastname($userId, $lastname) {
        $sql = 'UPDATE users_profiles SET user_lastname = ? WHERE user_id = ?;';
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute(array($lastname, $userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }
        $stmt = null;
    }

    protected function updateProfileImage($userId, $image) {
        $sql = 'UPDATE users_profiles SET user_image = ? WHERE user_id = ?;';
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute(array($image, $userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }
        $stmt = null;
    }

    protected function updateProfileAbout($userId, $about) {
        $sql = 'UPDATE users_profiles SET user_about = ? WHERE user_id = ?;';
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute(array($about, $userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }
        $stmt = null;
    }
}