<?php

if (isset($_POST['submit'])) {

    // include 'validate-data.inc.php';

    // grab the data
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // instantiate the signupContr class
    include '../classes/dbh.class.php';
    include '../classes/signup.class.php';
    include '../classes/signup-contr.class.php';
    $signup = new SignupContr($userName, $email, $password, $confirmPassword);

    // error handlers and user signup
    $signup->signupUser();

    //go back to front page
    header('location: ../index.php?error=none');
}