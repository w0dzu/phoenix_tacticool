<?php 

class Signup extends Dbh {

    protected function setUser($login, $email, $pwd)
    {
        $sql = 'INSERT INTO users (user_uuid, user_login, user_email, user_pwd) VALUES (UUID_SHORT(), ?,?,?);';
        $stmt = $this->connect()->prepare($sql);

        $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($login, $email, $pwdHash))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUserOrEmail($login, $email) {
        $sql = 'SELECT user_login FROM users WHERE user_login = ? OR user_email = ?;';
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute(array($login, $email))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() > 0) {
            $stmt = null;
            $result = true;
        }
        $result = false;
        $stmt = null;
        return $result;
    }

    protected function getUserUuid($login) {
        $sql = 'SELECT user_uuid FROM users WHERE user_login = ?;';
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute(array($login))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=usernotfound");
            exit();
        }

        $result = $stmt->fetchAll();
        $uuid = $result[0]["user_uuid"];

        return $uuid;
    }
}