<?php

class Login extends Dbh {

    protected function getUser($userName, $password) {
        $stmt = $this->connect()->prepare('SELECT user_password FROM users WHERE username = ? OR user_email = ?');

        if (!$stmt->execute([$userName, $userName])) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        if ($stmt->rowCount() === 0) {
            $stmt = null;
            header('location: ../index.php?error=usernotfound');
            exit();
        }

        $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $passwordHashed[0]['user_password']);

        if ($checkPassword === false) {
            $stmt = null;
            header('location: ../index.php?error=wrongpassword');
            exit();

        } elseif ($checkPassword === true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR user_email = ? AND user_password = ?');

            if (!$stmt->execute([$userName, $userName, $password])) {
                $stmt = null;
                header('location: ../index.php?error=stmtfailed');
                exit();
            }

            if ($stmt->rowCount() === 0) {
                $stmt = null;
                header('location: ../index.php?error=usernotfound');
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['userid'] = $user[0]['user_id'];
            $_SESSION['username'] = $user[0]['username'];

            $stmt = null;
        }

        $stmt = null;
    }
}