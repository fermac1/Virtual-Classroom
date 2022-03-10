<!-- dashboard-->
<div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <h2 class="mb-4">Welcome, <?php echo $firstname;?></h2>
    <?php include('teacher_dashboard_tab.php');?>
    </div>

    
		<!--create course-->
        <div class="tab-pane fade" id="createCourse" role="tabpanel" aria-labelledby="createCourse-tab">
            <?php include('create_course_form.php'); ?>
            
        </div>

        <!--course list-->
        <div class="tab-pane fade" id="listCourse" role="tabpanel" aria-labelledby="listCourse-tab">
            <h3 class="mb-4">List of Courses</h3>

        <div class="course-data">
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
            
    </div>

    <!--library-->
    <div class="tab-pane fade" id="library" role="tabpanel" aria-labelledby="library-tab" >
						<h3 class="mb-4">Personal Library</h3>
						<?php include('library.php'); $statusMsg='';?>
            
					<form action="teacher_dashboard.php" method="post" enctype="multipart/form-data" id="library-form" >
          <input type="file" name="input_file" id="input_file" />
          <!-- <input type="button" id="btnid" name="file_upload" value="upload"> -->
          <button class="btn btn-primary btnBox" type="submit" name="file_upload">Upload</button>
          </form>

          <?php include('personal_library_tab.php');  ?>
            </div>

    <!-- profile-->
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <h3 class="mb-4">Profile</h3>
    <div class="img-circle text-center ">
            <?php 
            	if(!empty($image)){
                echo "<img src=".$image." alt='Image' class='img-circle' width='100%'/>";
                
              }else{
                echo "<img src= 'images/camera.png' width='100%'/>";
                
              }
            ?>
        </div>
    <p><b>Name: &nbsp;</b><?php echo $firstname.'&nbsp;'. $lastname?></p>
    <p><b>Email: &nbsp;</b><?php echo $email?></p>
    <form action="image_upload.php" method="post" enctype="multipart/form-data">
      <div class="row">
    <div class="col-md-12">
								<div class="form-group">
								  	<label>Upload photo</label>
								  	<input type="file" class="form-control" name="input_image" id="input_image">
								</div>
							</div>
              </div>
              <button class="btn btn-primary btnBox" type="submit" name="submit">Upload</button>
    </form> 
  </div>
   
              <!-- password settings-->
              <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <h3 class="mb-4">Change Password</h3>
                <?php include('change_password.php'); $msg='';?>

                <form action="teacher_dashboard.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                              <label>Old password</label>
                              <input type="password" class="form-control" name="old_password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                              <label>New password</label>
                              <input type="password" class="form-control" name="new_password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                              <label>Confirm new password</label>
                              <input type="password" class="form-control" name="confirm_newpassword">
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary btnBox" name="change">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </div>
                </form>
            </div>


            	<!--notifications-->
        <div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
        <h4>Notification</h4>
            <?php include('notification.php'); ?> 
        </div>

  
  <!--schedule class-->
  <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
    <?php include('create_course_form.php'); ?>
          
  </div>

