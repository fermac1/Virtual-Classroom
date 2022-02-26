<?php
        $statusMsg='';
        $id = $_SESSION['id'];
    
     
            
        
    
                //upload courses to database
                if(isset($_POST['create'])){
                    
                    $coursecode = $_POST['course_code'];
                    $coursetitle = $_POST['course_title'];
                    $creditload = $_POST['credit_load'];
    
                    //check the database to make sure a user does not already exist with the same username or email
                    $user_check_query = "SELECT * FROM  courses WHERE course_code = '$coursecode' LIMIT 1";
                    $result_check = mysqli_query($conn, $user_check_query);
                    $user = mysqli_fetch_assoc($result_check);
    
                    if($user){
                        if($user['course_code'] === $coursecode){
                            
                            $statusMsg = "<div class='alert alert-warning' role='alert'>
                            course already exists</div>";
                        }
                    } 
    
                        //add user data if there are no errors
                    if(mysqli_num_rows($result_check) == 0){
                    $insert = "INSERT INTO `courses` (`userID`, `course_code`, `course_title`, `credit_load`)
                    VALUES ('$userID', '$coursecode', '$coursetitle', '$creditload')";
                    $insert_query = mysqli_query($conn, $insert);
                    if ($insert_query){
                        $statusMsg = "<div class='alert alert-success' role='alert'>
                        Course has been created successfully.
                      </div>";
                      
                    }else{
                        $statusMsg = "<div class='alert alert-danger' role='alert'>
                        Course not created.</div>";
                    }
                    }
                }
       
?>