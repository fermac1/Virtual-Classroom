<?php 
include('session.php');
include('connect.php');

$id = $_SESSION['id'];

//delete option
if(isset($_POST['deletefile'])){
    $getFile = $_POST['modal-input'];
    // echo $getFile;

    $delete = mysqli_query($conn, "DELETE FROM library WHERE file_name ='$getFile' ");
       
        if($delete){
            include('user.php');
            if($role === 'Teacher'){
                header("location: teacher_dashboard.php");
                exit();
            }
            if($role === 'Student'){
                header("location: student_dashboard.php");
                exit();
            }
        }else{
            echo 'unable to delete this course';
        }
}
