<?php 

class Login extends Dbh {

    protected function getUser($login, $pwd) {
            $sql = 'SELECT user_pwd FROM users WHERE user_login = ? OR user_email = ?;';
            $stmt = $this->connect()->prepare($sql);
    
            if (!$stmt->execute(array($login, $pwd))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
    
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?error=usersnotfound");
                exit();
            }
    
            $pwdHash = $stmt->fetchAll();
            $isPwdVerifed = password_verify($pwd, $pwdHash[0]["user_pwd"]);
    
            if ($isPwdVerifed == false) {
                $stmt = null;
                header("location: ../index.php?error=wrongpassword");
                exit();
            } elseif($isPwdVerifed == true) {
                $sql = 'SELECT * FROM users WHERE user_login = ? OR user_email = ? AND user_pwd = ?;';
                $stmt = $this->connect()->prepare($sql);
    
                if (!$stmt->execute(array($login, $login, $pwd))) {
                    $stmt = null;
                    header("location: ../index.php?error=stmtfailed");
                    exit();
                }
    
                if ($stmt->rowCount() == 0) {
                    $stmt = null;
                    header("location: ../index.php?error=usersnotfound");
                    exit();
                }
    
                $user = $stmt->fetchAll();
                //print_r( $user);
                
                session_start();
                $_SESSION['user_uuid'] = $user[0]["user_uuid"];
                $_SESSION['user_login'] = $user[0]["user_login"];
    
                $stmt = null;
            }
        }
    }