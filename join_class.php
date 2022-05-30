<?php
  include('connect.php');
  include('session.php');
  $id = $_SESSION['id'];
  
    if(isset($_POST['join'])){
        $getCourse = $_POST['course-code'];
    
        $sql = mysqli_query($conn, "SELECT * FROM schedule_class WHERE course_code ='$getCourse' ");
    
        if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
                $get_coursecode = $row['course_code'];
            }
            header("location: student_join_class.php?coursecode=".$get_coursecode);
            exit();
        }
    }
?>