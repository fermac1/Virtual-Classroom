<?php
include('student_dashboard.php');
?>
<div class="container sub-section not-dashboard">
    <!-- <p>You do not have any notifications yet</p> -->
    <div class="row ">
    <h3>Notifications</h3>
    
        <div class="col-lg-12">
        
        <?php
        include('connect.php');
        // include('session.php');
        $id = $_SESSION['id'];

        
           // check for registered courses
           $query = mysqli_query($conn, "SELECT * FROM course_registration WHERE userID = '$id' ");

           if(mysqli_num_rows($query) > 0){
               while($data = mysqli_fetch_assoc($query)){
               $course = $data["course_code"];
               $courseid = $data['id'];
   
              // Get data from the database
            $schedule = mysqli_query($conn,"SELECT * FROM schedule_class WHERE course_code = '$course' ORDER BY date ASC");
            
            if(mysqli_num_rows($schedule) > 0){
                 
                while($row = mysqli_fetch_assoc($schedule)){
                   $course_code = $row["course_code"];
                   $class_id = $row['id'];
                   $teacher_id = $row['teacher_id'];
                   $time = $row['time'];
                   $date = $row['date'];

                      
                    //get teacher information
                 $teacher = mysqli_query($conn, "SELECT * FROM users WHERE id = '$teacher_id'");
                 if(mysqli_num_rows($teacher) > 0){
                     while($get = mysqli_fetch_assoc($teacher)){
                         $firstname = $get["first_name"];
                         $lastname =$get["last_name"];    
                          
                     }
   echo "<p style='color: #28819d;'><b>Upcoming Class</b></p>";
                   include('student_class_notification.php'); 
   
                }
                // else{
                //     echo "user not found";
                // }
                }             
   
                }
            //     else{ 
                 
            //      echo "<div class='alert alert-warning' role='alert'>
            //      no class has been scheduled yet
            //      </div>";
                 
            //    }
        
     
               }
           }
           else{
               echo "<p>You do not have any notifications yet</p>";
           }    
           
        ?>
    </div>
    </div>
</div>