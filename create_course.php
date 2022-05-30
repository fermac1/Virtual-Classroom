<?php
        $statusMsg='';
        $id = $_SESSION['id'];
    
                //upload courses to database
                if(isset($_POST['create'])){
                    
                    $coursecode = strtoupper($_POST['course_code']);
                    $coursetitle = $_POST['course_title'];
                    $creditload = $_POST['credit_load'];
    


                    //check the database to make sure a course does not already exist 
                    $user_check_query = mysqli_query($conn, "SELECT * FROM  courses WHERE course_code = '$coursecode' ");

                    if(mysqli_num_rows($user_check_query) > 0){
                      
                        $statusMsg = "<div class='alert alert-warning' role='alert'>
                        course already exists</div>";
                    }else{
                        // Insert course into database
                        $insert = $conn->query("INSERT INTO `courses` (`userID`, `course_code`, `course_title`, `credit_load`)
                        VALUES ('$userID', '$coursecode', '$coursetitle', '$creditload')");
                        if($insert){
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