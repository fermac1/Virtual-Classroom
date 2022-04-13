<?php
include('teacher_dashboard.php');
?>

<!-- <h3 class="mb-4">List of Courses</h3> -->

        <div class="course-data sub-section not-dashboard">
        <h3 class="mb-4">List of Courses</h3>
          <div class="list-group">
          <?php
                      // Get data from the database
                      $query = $conn->query("SELECT * FROM courses WHERE userID = $id ORDER BY course_code ASC");

                      if($query->num_rows > 0){
                          while($row = $query->fetch_assoc()){
                              $course = $row["course_code"];
                              $courseid = $row['id'];
            ?>
            <?php include('display_teacher_course.php');?>
       
                 
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
          
          </div><!--/list-group-->
  

            </div><!--/course-data-->
    