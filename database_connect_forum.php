<?php

$host    = "localhost";
$user    = "root";
$pass    = "F6wG!MJEd4od";
$db_name = "forum";

$conn = mysqli_connect($host, $user, $pass, $db_name);

if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

?>