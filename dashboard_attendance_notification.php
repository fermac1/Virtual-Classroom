<?php
     //check class table
     $class = mysqli_query($conn, "SELECT * FROM attendance WHERE course_code = '$course' ");
     if(mysqli_num_rows($class) > 0){
        while($row = mysqli_fetch_assoc($class)){
            $class_course = $row['course_code'];
            $student_id = $row['student_id'];
            $date = $row['date'];
            
            //get student information
            $student = mysqli_query($conn, "SELECT * FROM users WHERE id = '$student_id'");
            if(mysqli_num_rows($student) > 0){
                while($data = mysqli_fetch_assoc($student)){
                    $firstname = $data["first_name"];
                    $lastname = $data["last_name"];    
                    $gender = $data['gender'];
                }
                ?>
                            <div class='row'>
                            <div class='col-lg-12'>
                                <p> <b><?php echo $class_course; ?></b> attendance list is ready. <span style="color: red;">Note that this will disappear after a day.</span> </p>
                                
                            </div>
                        </div>
                        <?php

            }else{
                echo "user not found";
            }
        }
     }
?>