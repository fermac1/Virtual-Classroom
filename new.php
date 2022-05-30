<?php
include('student_token.php');
//  if(isset($token)){
     $sql = mysqli_query($conn, "INSERT INTO `attendance` (`course_code`, `student_id`)
     VALUES ('$coursecode', '$uid')");
    //  echo '';
    //  echo $uid;
//  }
?>