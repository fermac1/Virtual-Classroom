<?php
    include('connect.php');
    include('session.php');
    $id = $_SESSION['id'];
    // include('student_token.php');

    if(isset($_POST['attendance'])){
        require_once('new.php');

    }
?>