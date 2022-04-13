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
                header("location: personal_library_tab.php?=".$id);
                exit();
            }
            if($role === 'Student'){
                header("location: student_personal_library_tab.php");
                exit();
            }
        }else{
            echo 'unable to delete this course';
        }
}
