<?php

class SignupContr extends Signup {

    private $userName;
    private $email;
    private $password;
    private $confirmPassword;

    public function __construct($userName, $email, $password, $confirmPassword) {
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
    }

    public function signupUser() {
        if ($this->emptyInput() === false) {
            // empty input
            header('location: ../signup.php?error=emptyinput');
            exit();
        }

        if ($this->invalidUsername() === false) {
            //invalid username
            header('location: ../signup.php?error=username');
            exit();
        }

        if ($this->invalidEmail() === false) {
            //invalid email
            header('location: ../signup.php?error=email');
            exit();
        }

        if ($this->passwordMatch() === false) {
            //invalid password match
            header('location: ../signup.php?error=passwordmatch');
            exit();
        }

        if ($this->passwordLength() === false) {
            //invalid password length
            header('location: ../signup.php?error=passwordlength');
            exit();
        }

        if ($this->usernameTaken() === false) {
            //invalid username taken
            header('location: ../signup.php?error=usernametaken');
            exit();
        }

        $this->setUser($this->userName, $this->password, $this->email);
    }

    private function emptyInput() {
        $result;

        if (empty($this->userName) || empty($this->email) || empty($this->password) || empty($this->confirmPassword)) {
            $result = false;

        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidUsername() {
        $result;

        if (!preg_match("/^(?=.{3,20}$)[a-zA-Z0-9]/", $this->userName)) {
            $result = false;

        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidEmail() {
        $result;

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;

        } else {
            $result = true;
        }

        return $result;
    }

    private function passwordMatch() {
        $result;

        if ($this->password !== $this->confirmPassword) {
            $result = false;

        } else {
            $result = true;
        }

        return $result;
    }

    private function passwordLength() {
        $result;

        if (strlen($this->password) < 8) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function usernameTaken() {
        $result;

        if (!$this->checkUser($this->userName, $this->email)) {
            $result = false;

        } else {
            $result = true;
        }

        return $result;
    }
}