<?php
    // include('session.php');
    include('image_upload.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/dashboard.css?v=<?php echo time(); ?>">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="header">
        <div class="img-circle text-center ">
        <?php 
            	if(!empty($image)){
                echo "<img src=".$image." alt='Image' class='img-circle' width='100%'/>";
                
              }else{
                echo "<img src= 'images/camera.png' width='100%'/>";
                
              }
            ?>
        </div>
    <h5 class="user"><?php echo $firstname.'&nbsp;'.$lastname;?></h5>    
      
    </div>
    
    
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <div class="nav-links">
      <a class="active" id="dashboard-tab" data-toggle="pill" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false">
        
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
      </div>

      <div class="nav-links">
        <a href="#">
          <i class='bx bx-list-ul' ></i>
          <span class="links_name">Course</span>
          <span class="bx bx-chevron-right arrow" onclick="show_list();"></span>
        </a>
      <ul class="list-group sub-menu" id="menu">
        <li class="list-group-item showMenu" aria-current="true">
            <a class="" id="addCourse-tab" data-toggle="pill" href="#addCourse" role="tab" aria-controls="addCourse" aria-selected="false">
              <i class="fa fa-user fa-fw"></i> Add Course</a>
          </li>
        <li class="list-group-item showMenu" aria-current="true">
            <a class="" id="listCourse-tab" data-toggle="pill" href="#listCourse" role="tab" aria-controls="listCourse" aria-selected="false">
                  <i class="fa fa-gear fa-fw"></i> Course List</a>
        </li>
      </ul>
      </div>

      <div class="nav-links">
        <a href="#">
          <i class='bx bx-book-alt' ></i>
          <span class="links_name">Library</span>
          <span class="bx bx-chevron-right arrow" onclick="show_list2()"></span>
        </a>
        <ul class="list-group sub-menu" id="menu2">
          <li class="list-group-item showMenu" aria-current="true">
          <a href="#">
             
              <i class="fa fa-user fa-fw"></i> General Library</a>
            </li>
            <li class="list-group-item showMenu" aria-current="true">
              <a class="" id="library-tab" data-toggle="pill" href="#library" role="tab" aria-controls="library" aria-selected="false">
          <i class="fa fa-gear fa-fw"></i> Personal Library</a>
            </li>
            </ul>
    </div>

      <div class="nav-links">
        <a href="#">
          <i class='bx bx-user' ></i>
          <span class="links_name">Account</span>
          <span class="bx bx-chevron-right arrow" onclick="show_list3();"></span>
        </a>
        <ul class="list-group sub-menu" id="menu3">
          <li class="list-group-item showMenu" aria-current="true">
            <a class="" id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
            <i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li class="list-group-item showMenu" aria-current="true">
            <a class="" id="settings-tab" data-toggle="pill" href="#settings" role="tab" aria-controls="settings" aria-selected="false">
            <i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="list-group-item showMenu" aria-current="true">
            <a href="#"><i class="fa fa-gear fa-fw"></i> Notification</a>
            </li>
            </ul>
      </div>

      <div class="nav-links log_out">
        <a href="logout.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
    </div>

    </div>
  </div>

  <section class="home-section">
    <!-- <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
    </nav> -->
    <nav class="sticky-top">
    <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
    </nav>

    <div class="home-content">
        <div class="overview-boxes">
    <!-- sidebar tabs-->
    <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
        
      <!-- dashboard-->
      <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <h2 class="mb-4">Welcome, <?php echo $firstname;?></h2>
    </div>
          
    
		<!--add course-->
        <div class="tab-pane fade" id="addCourse" role="tabpanel" aria-labelledby="addCourse-tab">
          <div class="add-course">
            <h3 class="mb-4">Add Course</h3>
                <form action="student_dashboard.php" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                              <label>course code</label>
                              <input type="text" class="form-control" name="course-code" required>
                        </div>
                    </div>
                </div>
               
                <div>
                    <button class="btn btn-primary btnBox" name="add">Add</button>
                </div>
                </form>
                <div class="add-course-content">
                <?php

                  include('student_add_course.php');
              ?>
      </div>
          </div>
            
        </div>

        <!--course list-->
        <div class="tab-pane fade" id="listCourse" role="tabpanel" aria-labelledby="listCourse-tab">
            <h3 class="mb-4">Registered Courses</h3>
            
            <div class="course-data">
          <div class="list-group">

          <?php
            // Get data from the database
          $query = $conn->query("SELECT * FROM course_registration WHERE userID = $id ORDER BY course_code ASC");

          if($query->num_rows > 0){
              while($row = $query->fetch_assoc()){
                  $course = $row["course_code"];
          ?>
          <?php include('student_course_list.php');?>

          <?php
                  }               

                }else{ 
                  echo    "<div class='alert alert-warning' role='alert'>
                  no course has been registered yet.</div>";
               
                 
               }
            ?>
          </div><!--/list-group-->
  

            </div><!--/course-data-->
            
        </div>

        <!--library-->
    <div class="tab-pane fade" id="library" role="tabpanel" aria-labelledby="library-tab">
						<h3 class="mb-4">Personal Library</h3>
						<?php include('library.php'); $statusMsg='';?>
            
					<form action="student_dashboard.php" method="post" enctype="multipart/form-data" id="library-form">
          <input type="file" name="input_file" id="input_file" />
          <!-- <input type="button" id="btnid" name="file_upload" value="upload"> -->
          <button class="btn btn-primary btnBox" type="submit" name="file_upload">Upload</button>
          </form>

          <div class="library-data">
          <ul class="list-group">
          <?php
            // Get data from the database
          $query = $conn->query("SELECT * FROM library WHERE userID = $id ORDER BY file_name ASC");

          if($query->num_rows > 0){
              while($row = $query->fetch_assoc()){
                  $fileName = $row["file_name"];

          ?>
          <?php include('display_library.php');?>
          <?php
              }               

              }else{ 
                echo "<img src= 'images/folder-svgrepo-com.svg' alt='Image' class='folder' width='50%'/>
                <p class='folder_paragraph'> This folder is Empty</p>";
               
             }
          ?>
          </ul>
          </div><!--/library-data-->
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
              <button class="btn btn-primary " type="submit" name="submit">Upload</button>
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
    </div>
    
</div>
</div>
    
  </section>

 
 <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
