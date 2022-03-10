<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-4 notification-box">
            <h4>Notification</h4>
            <!-- <p>You do not have any notifications yet</p> -->
            <?php include('dashboard_notification.php');?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-4 course-box">
           <h4>Created Courses</h4> 
           <?php
                      // Get data from the database
                      $query = $conn->query("SELECT * FROM courses WHERE userID = $id ORDER BY course_code ASC LIMIT 3");

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
            <button class="button-see-all">
            <a class="" id="listCourse-tab" data-toggle="pill" href="#listCourse" role="tab" aria-controls="listCourse" aria-selected="false">See All</a>
            </button>


        </div>
        <div class="col-lg-4 col-md-4 schedule-box">
            <h4>Schedules</h4>
            <!-- <p>no schedule yet</p> -->
            <?php

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

</div>