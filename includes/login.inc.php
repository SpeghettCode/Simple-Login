<?php

if (isset($_POST['submit'])) {

    // grab the data
    $userName = $_POST['username'];
    $password = $_POST['password'];

    // instantiate the signupContr class
    include '../classes/dbh.class.php';
    include '../classes/login.class.php';
    include '../classes/login-contr.class.php';
    $login = new LoginContr($userName, $password);

    // error handlers and user signup
    $login->loginUser();
    
    //go to page
    header('location: ../profile.php?error=none');
}