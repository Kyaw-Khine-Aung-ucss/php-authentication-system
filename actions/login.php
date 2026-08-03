<?php
session_start();
include("../config/database.php");
$db = dbConnect();

$email = $_POST['email'];
$password = $_POST['password'];

$qry = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($db, $qry); // send query to database and compile
mysqli_stmt_bind_param($stmt, "s", $email); // bind user's input email 
mysqli_stmt_execute($stmt); // bind email and ready sql query are started to run in the database
$result = mysqli_stmt_get_result($stmt); // raw data
$user = mysqli_fetch_assoc($result); // filter array data

if ($user != null) {
    if (
        $email == $user['email'] && password_verify($password, $user["password"]) // check whether user login data and user data from database are the same
    ) {
        $_SESSION["user_id"] = $user["id"];
        
        header('Location: ../profile.php');
        exit();
    } else {
        header('Location: ../index.php?incorrect=1');
        exit();
    }
} else {
    header('Location: ../index.php?incorrect=1');
    exit();
}
