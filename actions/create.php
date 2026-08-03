<?php

include("../config/database.php");
$db = dbConnect();
/*
    When users try to open create at browser address bar without using register button, 
    this create file will not work. Create only when click register button
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = trim($_POST["fullname"]); 
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // encryption

    // ? is placeholder
    $qry = "SELECT id FROM users WHERE email = ?"; // whether the same email is there
    $stmt = mysqli_prepare($db, $qry);
    mysqli_stmt_bind_param($stmt, "s", $email); // this step replace email at ? (where "s" is string type and i=>int, d=>double, b=>boolean) 
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) { // if email exist, mysqli_num_rows is 1
        echo "Email already exists!";
        exit();
    } else {
        $qry = "INSERT INTO users (fullname, email, password)
        VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($db, $qry);

        mysqli_stmt_bind_param(
            $stmt,
            "sss",
            $fullname,
            $email,
            $hashed_password
        );
        //mysqli_stmt_execute($stmt); // SQL execute

        if (mysqli_stmt_execute($stmt)) { // if some error is in database, return false value
            header('Location: ../index.php?register=success');
            exit();
        } else {
            echo "Register Fail";
        }
    }
} else {

    header("Location: ../register.php");
    exit();
}
