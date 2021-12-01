<?php

class Signup extends Dbh {

    protected function setUser($username, $password, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO users (username, user_password, user_email) VALUES (?, ?, ?);');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute([$username, $hashedPassword, $email])) {
            $stmt = null;
            header('location: ../signup.php?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($username, $email) {
        $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = :username OR user_email = :user_email');

        if (!$stmt->execute([':username' => $username, ':user_email' => $email])) {
            $stmt = null;
            header('location: ../signup.php?error=stmtfailed');
            exit();
        }


        $resultCheck;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}