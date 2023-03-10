<?php

class Profile extends Dbh {

    protected function setProfile($userUuid, $userImage, $userQrcode, $userAbout) {
        $sql = 'INSERT INTO users_profile (user_uuid, user_image, user_qrcode, user_about) VALUES (?, ?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute(array($userUuid, $userImage, $userQrcode, $userAbout))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: index.php?error=profilenotfound");
            exit();
        }

        $stmt = null;
    }

    protected function getUserProfile ($userUuid) {
        $sql = 'SELECT * FROM users_profile WHERE user_uuid = ?;';
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute(array($userUuid))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;

            header("location: ../index.php?error=profilenotfound");
            exit();
        }

        $profile = $stmt->fetchAll();

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

    //TODO updateProfileQrcode

    protected function getUserData ($userUuid) {
        $sql = 'SELECT * FROM users_data WHERE user_uuid = ?;';
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute(array($userUuid))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;

            header("location: ../index.php?error=profilenotfound");
            exit();
        }

        $profile = $stmt->fetchAll();

        return $profile;
    }

    protected function getUser($userUuid) {
        $sql = 'SELECT * FROM users WHERE user_uuid = ?;';
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute(array($userUuid))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;

            header("location: ../index.php?error=profilenotfound");
            exit();
        }

        $profile = $stmt->fetchAll();

        return $profile;
    }
}