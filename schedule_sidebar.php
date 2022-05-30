<?php
include('teacher_dashboard.php');

?>

<div class="sub-section not-dashboard" >
  
<div class="col-lg-7 col-md-4 col-sm-10 ">
            <h4>Schedules</h4>
            <!-- <p>no schedule yet</p> -->
            <?php
include('connect.php');

                      // Get data from the database
                      $query = $conn->query("SELECT * FROM schedule_class WHERE teacher_id = $id ORDER BY course_code ASC");

                      if($query->num_rows > 0){
                          while($row = $query->fetch_assoc()){
                              $course = $row["course_code"];
                              $courseid = $row['id'];
            ?>
            <?php include('schedule_tab.php');?>
       
                 
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