<?php
include('connect.php');
$statusMsg='';
$id = $_SESSION['id'];
if(isset($_POST['course-details'])){
    $description = $_POST['description'];
    $outline = $_POST['outline'];
    $course = strtoupper($_POST['course_code']);

    $sql = mysqli_query($conn, "SELECT * FROM courses WHERE course_code = '$course' AND userID = '$id' ");
    if(mysqli_num_rows($sql) > 0){
        $update = "UPDATE courses SET course_description = '$description' , course_outline = '$outline'  WHERE course_code = '$course' ";
        if(mysqli_query($conn, $update)){
            $statusMsg = "<div class='alert alert-success' role='alert'>
            Course details have been added successfully.
          </div>";
        }else{
            $statusMsg = "<div class='alert alert-warning' role='alert'>
            Error uploading details
          </div>";
        }
    }else{
        $statusMsg = "<div class='alert alert-danger' role='alert'>
        Course does not exist.
      </div>";
    }

}
?>