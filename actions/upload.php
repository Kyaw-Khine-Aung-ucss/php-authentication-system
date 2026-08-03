<?php
session_start();

$photo_name = $_FILES['photo']['name'];
$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if($type === "image/jpeg" || $type === "image/png") { 
    move_uploaded_file($tmp, "../photos/" . $photo_name);
    $_SESSION['profile-photo'] = "photos/" . $photo_name; // save file path and photo name in the session
    header('location: ../profile.php');
} else {
    header('location: ../profile.php?error=type');
}
