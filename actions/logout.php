<?php
session_start();
session_unset();
session_destroy();

header('location: ../index.php');
exit();

//unset($_SESSION['email']); // delete email session
// unset($_SESSION['fullname']); // delete user session
// session_destroy(); // delete all sessions