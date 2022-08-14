<?php
include('student_dashboard.php');

?>

<div class="library-data sub-section not-dashboard">
  

  <?php
    $coursecode = filter_input(INPUT_GET, 'folder', FILTER_SANITIZE_URL);
?>
	<ul class="cui breadcrumb">
		<li class="active" onclick="history.go(-1)"  style="margin-right: 5px; cursor: pointer;"><img src="images/go-back-icon.png" alt="back-arrow"></li>
        <li style="margin-right: 5px;">General-library > </li>
		<li> <?php echo $coursecode;?></li>
	</ul>

          <ul class="list-group">
          <?php

            // Get data from the database
          $query = $conn->query("SELECT * FROM general_library WHERE course_code = '$coursecode' ORDER BY file_name DESC");

          if($query->num_rows > 0){
              while($row = $query->fetch_assoc()){
                  $fileName = $row["file_name"];
                  $file_id = $row['id'];
                  $size = $row['size (KB)'];
                  $course = $row['course_code'];

            include('student_display_general_library.php'); 

              }               

              }else{ 
                echo "<img src= 'images/folder-svgrepo-com.svg' alt='Image' class='folder' width='40%'/>
                <p class='folder-paragraph'> This folder is Empty</p>";
               
             }
          ?>
          </ul>



            </div><!--/library-data-->