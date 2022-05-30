<?php
include('student_dashboard.php');
?>
<div class="container sub-section dashboard-tab">
<h2 class="mb-4">Welcome, <?php echo ucfirst($firstname);?></h2>
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-10 notification-box">
            <h4>Notification</h4>
<?php include('student_dashboard_notification.php'); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-4 col-sm-10 course-box">
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
                         No course has been registered yet
                       </div>";
                         }
          ?>
           <button class="button-see-all">
            <a class="" href="student_course_list.php">See All</a>
            </button>

        </div>
        
    </div>

</div>