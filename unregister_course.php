<?php
include('connect.php');
include('session.php');

$id = $_SESSION['id'];

if(isset($_POST['unregister'])){
    $unreg = $_POST['modal-unreg-input'];

    $delete = mysqli_query($conn, "DELETE FROM course_registration WHERE course_code = '$unreg' ");

    if($delete){
        header("location: student_dashboard.php");
        exit();
    }else{
        echo 'unable to delete this course';
    }
}
?>