<?php
include('student_dashboard.php');

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

// include('display_library.php'); 
include('display_library.php'); 

              }               

              }else{ 
                echo "<img src= 'images/folder-svgrepo-com.svg' alt='Image' class='folder' width='40%'/>
                <p class='folder-paragraph'> This folder is Empty</p>";
               
             }
          ?>
          </ul>
          <!--details Modal -->
  <div class='modal fade' id='details' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
    <div class='modal-dialog modal-md'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title' id='detailsLabel'>Properties</h5>
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <form action='details.php' method='post'>
        <div class='modal-body'>
          <?php
          include('details.php');
          echo "<ul>
                <li><b>Filename:</b> {$filename}</li>
                <li><b>size:</b> {$filesize}</li>
                </ul>";
            
            ?>
         
        </div>
        </form>
      </div>
    </div>
  </div>

            </div><!--/library-data-->