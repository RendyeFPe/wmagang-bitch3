<?php session_start();


$_SESSION['session_username'] = "";
$_SESSION['session_password'] = "";
// $_SESSION['user_firstname'] = "";
// $_SESSION['user_lastname'] = "";
// $_SESSION['user_role'] = "";

session_destroy();

header("location:../index.php");