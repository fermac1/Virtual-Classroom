<?php
include('connect.php');
$msg='';
$sql = "SELECT * FROM users WHERE id ='$id' AND role ='Student'";
$user = mysqli_query($conn, $sql);
if(mysqli_num_rows($user) > 0){
    while($row = mysqli_fetch_assoc($user)){
        $email = $row['email'];
        $id = $row ['id'];
    }
    if(isset($_POST['add'])){
        $input = $_POST['course-code'];
        $sql = "SELECT * FROM courses WHERE course_code ='$input' ORDER BY course_code ASC";
        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result) > 0){
            while($data = mysqli_fetch_assoc($result)){
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
                                    //generate pin
                            function random_key($string_length){
                                $string_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
                                return substr(str_shuffle($string_result),0, $string_length);   
                            }
                    
                        $pin = random_key(8);

                    
                        $insert = "INSERT INTO `course_registration` (`userID`, `user_email`, `course_code`, `user_pin`)
                        VALUES('$id', '$email', '$coursecode', '$pin')";
                        $insert_query = mysqli_query($conn, $insert);
                        if($insert_query){
                            
                        $msg = "<div class='alert alert-success' role='alert'>
                        {$coursecode} has been added successfully.
                      </div>";
                    echo $msg;
                
                        }else{
                            
                        $msg = "<div class='alert alert-danger' role='alert'>
                        There was an error adding this course.</div>";
                        echo $msg;
                        }
                    }
                
        }else{
            $msg = "<div class='alert alert-warning' role='alert'>
                        This  course does not exist.</div>";
            echo $msg;
        }
    }

}else{
    $msg = "<div class='alert alert-danger' role='alert'>
    this user does not exist or is not registered as a student</div>";
    echo $msg;
}
?>