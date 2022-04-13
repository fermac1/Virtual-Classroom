<?php
//   include('connect.php');
  include('teacher_dashboard.php');
?>

  <div class="sub-section not-dashboard">
  <h4>Course Information</h4>
            <div class="row schedule-form">
                <?php include('add_course_info.php'); echo $statusMsg; ?>
            <form action="" method="post">
            <div class="row">
                    <div class="col-lg-4">
                    <label for=""><b>Course Code:</b> </label>
                    </div>
                    <div class="col-lg-5">
                    <input type="text" name="course_code" id="course_code" style="margin-bottom: 10px;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                    <label for=""><b>Course Description:</b> </label>
                    </div>
                    <div class="col-lg-5">
                    <textarea name="description" id="description" cols="50" rows="10"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                    <label for=""><b>Course Outline:</b> </label>
                    </div>
                    <div class="col-lg-5">
                    <textarea name="outline" id="outline" cols="50" rows="10"></textarea>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-lg-4">
                    <label for=""><b>Instructor:</b> </label>
                    </div>
                    <div class="col-lg-5">
                    
                    </div>
                </div> -->
            
              <button type="submit" name="course-details" class="course-details-btn">Submit</button>
            </form> 
            </div>
  </div>