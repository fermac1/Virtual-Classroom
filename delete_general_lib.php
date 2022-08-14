<?php 
include('session.php');
include('connect.php');

$id = $_SESSION['id'];

//delete option
if(isset($_POST['deletefile'])){
    $getFile = $_POST['modal-input'];
    // echo $getFile;

    $delete = mysqli_query($conn, "DELETE FROM general_library WHERE file_name ='$getFile' ");
       
        if($delete){
                header("location: general_library_tab.php?=".$id);
                exit();
        }else{
            echo 'unable to delete this course';
        }
}
