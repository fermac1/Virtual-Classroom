<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-4 notification-box">
            <h4>Notification</h4>
<?php
           // check for registered courses
        $query = $conn->query("SELECT * FROM course_registration WHERE userID = $id ORDER BY course_code ASC");

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
            $course = $row["course_code"];
            $courseid = $row['id'];

            ?>
<div class="row schedule-data">
         
         <?php
           // Get data from the database
         $query = $conn->query("SELECT * FROM schedule_class WHERE course_code = '$course' ORDER BY course_code DESC");

         if($query->num_rows > 0){
             while($row = $query->fetch_assoc()){
                $course_code = $row["course_code"];
                $class_id = $row['id'];
                $time = $row['time'];
                $date = $row['date'];

                include('student_schedule_tab.php'); 

             }               

             }else{ 
              echo " <p>You do not have any notifications yet</p>";
              
            }
         ?>

</div>


            <?php    
            }
        }    
        else{ 
        echo 
        "<div class='alert alert-warning' role='alert'>
        no class has been scheduled yet
        </div>";
        }
        ?>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-4 course-box">
           <h4>Registered Courses</h4> 
           <?php
                      // Get data from the database
                      $query = $conn->query("SELECT * FROM course_registration WHERE userID = $id ORDER BY course_code ASC LIMIT 3");

                      if($query->num_rows > 0){
                          while($row = $query->fetch_assoc()){
                              $course = $row["course_code"];
                              $courseid = $row['id'];
            ?>
            <?php include('display_student_course.php');?>
       
                 
                       <?php    
                         } 
                        }    
                         else{ 
                               echo 
                               "<div class='alert alert-warning' role='alert'>
                         no course has been created yet
                       </div>";
                         }
          ?>

        </div>
        
    </div>

</div>