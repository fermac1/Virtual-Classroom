<?php 

include('connect.php');
include('session.php');

// $msg='';
$id = $_SESSION['id'];

if(isset($_POST['unregister'])){

    $sql = "SELECT * FROM course_registration WHERE userID = $id ";
    $query = mysqli_query($conn, $sql);

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $coursecode = $row['course_code'];
            $row_id = $row['id'];
            
        }
        $delete = mysqli_query($conn, "DELETE FROM course_registration WHERE id = $row_id");
        // echo $filename;
        // echo $id;
        echo $row_id;
        if($delete){
            // $msg =   "<div class='alert alert-success' role='alert'>
            // deleted successfully!
            //   </div>";
            header("location: student_dashboard.php");
            exit();
        }else{
            echo 'unable to unregister this course';
        }
    }else{
        echo "course does not exist";
    }
}
?>