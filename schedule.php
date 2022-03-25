<?php
// include('session.php');
include('connect.php');
$statusMsg='';
$id = $_SESSION['id'];

if(isset($_POST['schedule'])){
    $course = $_POST['schedule-class-input'];
    $date = $_POST['schedule-date'];
    $time = $_POST['schedule-time'];

    // check if course exists
    $course_query = mysqli_query($conn, "SELECT * FROM courses WHERE course_code = '$course' AND userID = '$id'");
    if(mysqli_num_rows($course_query) > 0){
        // check if class has already been scheduled
        $schedule_query = mysqli_query($conn, "SELECT * FROM schedule_class WHERE course_code = '$course' ");
        if(mysqli_num_rows($schedule_query) > 0){
            
            $statusMsg = "<div class='alert alert-warning' role='alert'>
            class has already been scheduled.
          </div>";
        }else{
            $insert_query = mysqli_query($conn, "INSERT INTO schedule_class (teacher_id, course_code, date, time) VALUES('$id', '$course', '$date', '$time') " );
        
            if($insert_query){
                $statusMsg = "<div class='alert alert-success' role='alert'>
              Class has been scheduled successfully.
              </div>";
            }
        }

    }else{
        $statusMsg = "<div class='alert alert-danger' role='alert'>
        Course does not exist.
      </div>";
    }
}
?>