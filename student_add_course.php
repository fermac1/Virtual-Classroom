<?php
    include('connect.php');
    $msg='';

    $course_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
    // $id = $_SESSION['id'];
    
    $user = mysqli_query($conn, "SELECT * FROM users WHERE id ='$id' AND role ='Student'");
    
    if(mysqli_num_rows($user) > 0){
        while($row = mysqli_fetch_assoc($user)){
            $email = $row['email'];
            $id = $row ['id'];
        }

    $sql =  mysqli_query($conn, "SELECT * FROM courses WHERE id ='$course_id' ");
   
    if(mysqli_num_rows($sql) > 0){
        while($data = mysqli_fetch_assoc($sql)){

            $coursecode = $data['course_code'];
            $coursetitle = $data['course_title'];
            $creditload = $data['credit_load'];
    
            }

                $add = "SELECT * FROM course_registration WHERE course_code = '$coursecode' AND userID ='$id'";
                $query = mysqli_query($conn, $add);
                if(mysqli_num_rows($query) > 0){
                    echo  "<div class='alert alert-warning' role='alert'>
                    you have already registered this course.</div>";
                    
                }else{

                    $insert = "INSERT INTO `course_registration` (`userID`, `user_email`, `course_code`)
                    VALUES('$id', '$email', '$coursecode')";

                    $insert_query = mysqli_query($conn, $insert);

                    if($insert_query){
                        
                        $msg = "<div class='alert alert-success' role='alert'>
                                {$coursecode} has been added successfully. </div>";
                        echo $msg;

                    }else{        
                        $msg = "<div class='alert alert-danger' role='alert'>
                        There was an error adding this course.</div>";
                        echo $msg;
                    }
        }
    
    }
}
    
?>