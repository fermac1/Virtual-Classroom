<?php
    include('connect.php');
    include('session.php');
    $id = $_SESSION['id'];

//delete option
if(isset($_POST['cancel'])){
    $getCourse = $_POST['course-code'];
    // echo $getFile;

    $delete = mysqli_query($conn, "DELETE FROM schedule_class WHERE course_code ='$getCourse' ");
       
        if($delete){
            header("location: teacher_dashboard_tab.php?=".$id);
                exit();
        }else{
            echo 'unable to delete this course';
        }
}

//start option
if(isset($_POST['start'])){
    $getCourse = $_POST['course-code'];

    $sql = mysqli_query($conn, "SELECT * FROM schedule_class WHERE course_code ='$getCourse' ");

    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $get_coursecode = $row['course_code'];
        }
        header("location: class.php?coursecode=".$get_coursecode);
        exit();
    }
}
?>