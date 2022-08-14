<?php
    //check class table
    $class = mysqli_query($conn, "SELECT * FROM attendance WHERE course_code = '$course' LIMIT 1");
    if(mysqli_num_rows($class) > 0){

        while($row = mysqli_fetch_assoc($class)){
            $class_course = $row['course_code'];
            $student_id = $row['student_id'];
            
            include('attendance_notification.php');

        }
    }

?>
