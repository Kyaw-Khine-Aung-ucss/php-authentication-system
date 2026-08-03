<?php
session_start();
if (!isset($_SESSION['user_id'])) { // if user try to search and open profile.php in browser, this page will not open
    header('location: ../index.php');
    exit();
}

include("../config/database.php");
$db = dbConnect();

$id = trim($_POST['id']);
$fullname = trim($_POST['fullname']);
$phone = $_POST['phone'];
$address = trim($_POST['address']);

$qry = "UPDATE users SET fullname=?, phone=?, address=? WHERE id=?";
$stmt = mysqli_prepare($db, $qry);
mysqli_stmt_bind_param($stmt, "sssi", $fullname, $phone, $address, $id);

if (mysqli_stmt_execute($stmt)) {
    header('Location: ../profile.php');
    exit();
} else {
    echo "Update Fail!";
}
