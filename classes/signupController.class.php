<?php

class SignupController extends Signup
{
    private $login;
    private $email;
    private $pwd;
    private $pwdrepeat;

    // Constructor
    public function __construct($login, $email, $pwd, $pwdrepeat)
    {
        $this->login = $login;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
    }
    // ****************

    public function signupUser() {
        if ($this->isInputEmpty() == true) {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if ($this->isLoginValid() == true) {
            header("location: ../signup.php?error=invalidlogin");
            exit();
        }
        if ($this->isEmailValid() == true) {
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        if ($this->isUserOrEmailTaken() == true) {
            header("location: ../signup.php?error=usernameoremailtaken");
            exit();
        }
        if ($this->isPwdMatch() == false) {
            header("location: ../signup.php?error=passoworddontmatch");
            exit();
        }
        
        $this->setUser($this->login, $this->email, $this->pwd);
    }

    private function isInputEmpty() {
        $result = null;
        if (empty($this->login) || empty($this->email) || empty($this->pwd) || empty($this->pwdrepeat)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    private function isLoginValid() {
        $result = null;
        if (preg_match('/^[a-zA-Z0-9.]+$/', $this->login)) { // if more that one match?
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function isEmailValid() {
        $result = null;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    private function isUserOrEmailTaken() {
        $result = null;
        if ($this->checkUserOrEmail($this->login, $this->email)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    private function isPwdMatch() {
        $result = null;
        if ($this->pwd == $this->pwdrepeat) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    public function fetchUserUuid($login)
    {
        $uuid = $this->getUserUuid($login);
        return $uuid;
    }
}
