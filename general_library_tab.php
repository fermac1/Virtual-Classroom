<?php
include('teacher_dashboard.php');

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


 <?php include('general_library_setup.php'); ?>
  <form action="" method="post" enctype="multipart/form-data" class="library-form" >
    <input type="file" name="input_file" id="input_file" />
    <!-- <input type="button" id="btnid" name="file_upload" value="upload"> -->
    <button class="btn btn-primary btnBox" type="submit" name="file_upload">Upload</button>
</form>
          <ul class="list-group">
          <?php
            // Get data from the database
          $query = $conn->query("SELECT * FROM general_library WHERE teacher_id = '$id' AND course_code='$coursecode' ORDER BY file_name DESC");

          if($query->num_rows > 0){
              while($row = $query->fetch_assoc()){
                  $fileName = $row["file_name"];
                  $file_id = $row['id'];
                  $size = $row['size (KB)'];
                  $course = $row['course_code'];

// include('display_library.php'); 
include('display_general_library.php'); 

              }               

              }else{ 
                echo "<img src= 'images/folder-svgrepo-com.svg' alt='Image' class='folder' width='40%'/>
                <p class='folder-paragraph'> This folder is Empty</p>";
               
             }
          ?>
          </ul>



            </div><!--/library-data-->