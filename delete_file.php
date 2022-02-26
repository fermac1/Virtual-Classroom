<?php 
include('session.php');
include('connect.php');

$id = $_SESSION['id'];
if(isset($_POST['delete-modal'])){
    $getFile = $_POST['delete-row'];
    echo $getFile;
if(isset($_POST['deletefile'])){

    $sql = "SELECT * FROM library WHERE userID = $id ";
    $query = mysqli_query($conn, $sql);

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $filename = $row['file_name'];
            $row_id = $row['id'];
            
        }
        $delete = mysqli_query($conn, "DELETE FROM library WHERE id = $row_id");
        // echo $filename;
        // echo $id;
        echo $row_id;
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
            echo 'unable to delete this file';
        }
    }else{
        echo "file does not exist";
    }
}
}