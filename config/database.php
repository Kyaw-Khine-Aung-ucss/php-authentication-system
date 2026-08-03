<?php 
define("DB_HOST", "localhost");
define("DB_NAME", "auth_system");
define("DB_USER", "root");
define("DB_PASSWORD", "");

function dbConnect() {
    $db_connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (mysqli_connect_errno() > 0) {
        die("Connection Fail!");
    } else {
        return $db_connect;
    }
    
}
