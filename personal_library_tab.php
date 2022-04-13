<?php
include('teacher_dashboard.php');

?>



<div class="library-data sub-section not-dashboard">
  <h3>Personal Library</h3>
 <?php include('library.php'); ?>
  <form action="" method="post" enctype="multipart/form-data" id="library-form" >
    <input type="file" name="input_file" id="input_file" />
    <!-- <input type="button" id="btnid" name="file_upload" value="upload"> -->
    <button class="btn btn-primary btnBox" type="submit" name="file_upload">Upload</button>
</form>
          <ul class="list-group">
          <?php
            // Get data from the database
          $query = $conn->query("SELECT * FROM library WHERE userID = $id ORDER BY file_name DESC");

          if($query->num_rows > 0){
              while($row = $query->fetch_assoc()){
                  $fileName = $row["file_name"];
                  $file_id = $row['id'];
                  $size = $row['size (KB)'];

// include('display_library.php'); 
include('display_library.php'); 

              }               

              }else{ 
                echo "<img src= 'images/folder-svgrepo-com.svg' alt='Image' class='folder' width='40%'/>
                <p class='folder-paragraph'> This folder is Empty</p>";
               
             }
          ?>
          </ul>



            </div><!--/library-data-->