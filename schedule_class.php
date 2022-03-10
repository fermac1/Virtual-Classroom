<?php
    // include('session.php');
    include('connect.php');
    include('image_upload.php');

    $statusMsg='';

    
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
    <link rel="stylesheet" href="css/schedule.css?v=<?php echo time(); ?>">
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
    <h5 class="user"><?php include('user.php'); echo $firstname.'&nbsp;'.$lastname;?></h5>    
      
    </div><!--/header-->
    
    
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

    <ul class="list-group">
      <!-- <ul class="list-group"> -->
        <li class="nav-links">
        <a href="">
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
            <a class="" id="createCourse-tab" data-toggle="pill" href="#createCourse" role="tab" aria-controls="createCourse" aria-selected="false">
              <i class="fa fa-user fa-fw"></i> Create Course</a>
            </li>
          <li class="list-group-item showMenu myList" aria-current="true">
            <a class="" id="listCourse-tab" data-toggle="pill" href="#listCourse" role="tab" aria-controls="listCourse" aria-selected="false">
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
          <a href="#">
             
              <i class="fa fa-user fa-fw"></i> General Library</a>
            </li>
            <li class="list-group-item showMenu" aria-current="true">
              <a class="" id="library-tab" data-toggle="pill" href="#library" role="tab" aria-controls="library" aria-selected="false">
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
            <a class="" id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
            <i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li class="list-group-item showMenu" aria-current="true">
            <a class="" id="settings-tab" data-toggle="pill" href="#settings" role="tab" aria-controls="settings" aria-selected="false">
            <i class="fa fa-gear fa-fw"></i>Change Password</a>
            </li>
            <li class="list-group-item showMenu" aria-current="true">
            <a class="" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
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

 
  <div class="home-content">
<div class="overview-boxes">


 <!-- schedule tab -->
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-4 schedule-box">
            <h4>Schedule a class</h4>
            <div class="row schedule-form">
                <?php include('schedule.php'); echo $statusMsg; ?>
            <form action="schedule_class.php" method="post">
              <div class="col-lg-12 schedule-col">
              <label for="">Course:</label>
              <input name="schedule-class-input" class="schedule-input" id="schedule-class-input" required>
              </div>
              <div class="col-lg-12 schedule-col">
              <label for="">Date:</label>
              <input type="date" name="schedule-date" id="schedule-date" required>
              </div>
              <div class="col-lg-12 schedule-col">
              <label for="">Time:</label>
              <input type="time" name="schedule-time" id="schedule-time" required>
              </div>
              <button type="submit" name="schedule">Schedule</button>
            </form> 
            </div>
 
        </div>
    </div>
  </div>

</div>
  </div>
  </section>

  <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/dashboard.js?v=<?php echo time();?>"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="js/delete_file.js"></script>
<script src="js/course.js?v=<?php echo time();?>"></script>

</body>
</html>
