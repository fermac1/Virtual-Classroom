<?php
include('session.php');
include('connect.php');

$id = $_SESSION['id'];
//delete option
if(isset($_POST['deleteBtn'])){
    $getCourse = $_POST['modal-course-input'];
    // echo $getCourse;

    $delete = mysqli_query($conn, "DELETE FROM courses WHERE course_code='$getCourse' ");
       
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
?>