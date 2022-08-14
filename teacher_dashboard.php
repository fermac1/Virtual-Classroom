<?php 
include('connect.php');
include('image_upload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/courses.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/library.css?v=<?php echo time(); ?>">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
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
    <h5 class="user"><?php include('user.php'); echo ucfirst($firstname).'&nbsp;'. ucfirst($lastname);?></h5>    
      
    </div><!--/header-->
    
    
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

    <ul class="list-group">
      <!-- <ul class="list-group"> -->
        <li class="nav-links">
        <a href="teacher_dashboard_tab.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>

    <!-- </div> -->

      <li class="nav-links nav-item">
        <a href="#" class="drop" onclick="show_list()">
          <i class='bx bx-list-ul' ></i>
          <span class="links_name">Course</span>
          <span class="bx bx-chevron-right arrow" ></span>
        </a>
        <ul class="list-group sub-menu" id="menu">
          <li class="list-group-item showMenu myList" aria-current="true">
            <a class="" href="create_course_form.php">
              <i class="fa fa-user fa-fw"></i> Create Course</a>
            </li>
          <li class="list-group-item showMenu myList" aria-current="true">
            <a class="" href="teacher_course_list.php">
                  <i class="fa fa-gear fa-fw"></i> Course List</a>
            </li>
        </ul> 
            </li>

      <li class="nav-links">
        <a href="#" class="drop" onclick="show_list2()">
          <i class='bx bx-book-alt' ></i>
          <span class="links_name">Library</span>
          <span class="bx bx-chevron-right arrow" ></span>
        </a>
        <ul class="list-group sub-menu" id="menu2">
          <li class="list-group-item showMenu" aria-current="true">
          <a href="general_library.php">
              <i class="fa fa-user fa-fw"></i> General Library</a>
            </li>
            <li class="list-group-item showMenu" aria-current="true">
              <a class="" href="personal_library_tab.php">
          <i class="fa fa-gear fa-fw"></i> Personal Library</a>
            </li>
            </ul>
        </li>

      <li class="nav-links">
        <a href="#" class="drop" onclick="show_list3()">
          <i class='bx bx-user'></i>
          <span class="links_name">Account</span>
          <span class="bx bx-chevron-right arrow"></span>
        </a>
        <ul class="list-group sub-menu" id="menu3">
          <li class="list-group-item showMenu" aria-current="true">
            <a class="" href="teacher_profile.php" >
            <i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li class="list-group-item showMenu" aria-current="true">
            <a class="" href="teacher_change_password.php">
            <i class="fa fa-gear fa-fw"></i>Change Password</a>
            </li>
            <li class="list-group-item showMenu" aria-current="true">
            <a class="" href="notification.php" >
              <i class="fa fa-gear fa-fw"></i> Notification</a>
            </li>
            </ul>
        </li>

      <li class="nav-links log_out">
        <a href="logout.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>

    </ul>

    
    </div>
  </div>


  <section class="home-section">
    <nav class="sticky-top">
    <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <!-- <span class="dashboard">Dashboard</span> -->
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
    </nav>
  </section>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/dashboard.js?v=<?php echo time();?>"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
</body>
</html>