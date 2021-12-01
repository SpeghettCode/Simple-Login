<?php

// unset and destroy sessions
session_start();
session_unset();
session_destroy();

//go back to login page
header('location: ../index.php?error=loggedout');