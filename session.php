<?php
session_start();
if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
    //redirect to login page
    header("location: login.php");
    exit();
}
$id = $_SESSION['id'];
?>