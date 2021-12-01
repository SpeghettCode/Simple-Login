<?php

class LoginContr extends Login {

    private $userName;
    private $password;


    public function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = $password;
    }

    public function loginUser() {
        if ($this->emptyInput() === false) {
            // empty input
            header('location: ../index.php?error=emptyinput');
            exit();
        }

        $this->getUser($this->userName, $this->password);
    }

    private function emptyInput() {
        $result;

        if (empty($this->userName) || empty($this->password)) {
            $result = false;

        } else {
            $result = true;
        }

        return $result;
    }
}