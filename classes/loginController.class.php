<?php

class LoginController extends Login {
    
    private $login;
    private $pwd;


    // Constructor
    public function __construct($login, $pwd) {
        $this->login = $login;
        $this->pwd = $pwd;
    }
    // ****************

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            header("location: ../login.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->login, $this->pwd);
    }

    private function emptyInput() {
        $result = null;
        if (empty($this->login) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}