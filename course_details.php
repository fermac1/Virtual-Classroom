<?php
  include('teacher_dashboard.php');
?>

  <div class="container sub-section not-dashboard">
  <h4>Course Information</h4>
            <div class="row">
                <div class="col-lg-12 course-details">
                <?php 
                $getcourse = $_GET['id'];
                
                $sql = mysqli_query($conn, "SELECT * FROM courses WHERE id = '$getcourse'");
                if(mysqli_num_rows($sql) > 0){
                    while($data = mysqli_fetch_assoc($sql)){
                        $coursedescription = $data['course_description'];
                        $courseoutline = $data['course_outline'];
                        $coursecode = $data['course_code'];
                        $coursetitle = $data['course_title'];
              
                 ?>
            
            <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    <label for=""><b>Course Code:</b> </label>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-3">
                    <input type="text" class="coursecode-row" value="<?php echo $coursecode;?>" style="margin-bottom: 10px;" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    <label for=""><b>Course Title:</b> </label>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-3">
                    <input type="text" class="coursecode-row" value="<?php echo $coursetitle;?>" style="margin-bottom: 10px;" readonly>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    <label for=""><b>Course Description:</b> </label>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-4">
                    <?php echo $coursedescription; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-3">
                    <label for=""><b>Course Outline:</b> </label>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-4">
                    <?php echo $courseoutline; ?>
                    </div>
                </div>

                <?php
                      }
                    }
                    ?>
            </div>
            </div>
  </div>
  