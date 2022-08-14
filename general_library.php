<?php
include('teacher_dashboard.php');
?>
<style>
#folder{
    background-color: transparent;
    border: none;
    /* width: 100%; */
    text-align: left;
    padding: 10px;
}
#folder-form:hover{
    background-color: #f5f5f5;
}
hr{
    padding: 0;
    margin: 0;
}
</style>
<div class="library-data sub-section not-dashboard">
  <h3>General Library</h3>
  <?php
        $sql = mysqli_query($conn, "SELECT * FROM courses WHERE userID = '$id'");
        if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
                $coursecode = $row['course_code'];

    $path = "general-library/";
    $course_path = "general-library/".$coursecode. "/";
    if (file_exists($course_path)) {
        if($fh = opendir($path)){
            while(($course_folder = readdir($fh)) !== false){
                if($course_folder!='.' && $course_folder != '..' && $course_folder == $coursecode){
   
            ?>
 <div class="list-group">
 <form action="general_library_tab_link.php" method="post" id="folder-form">
 <img src="images/folder-svgrepo-com.svg" alt="folder" width="5%"><span>
  <input type="submit" id="folder" name="folder" value="<?php echo $course_folder;?>" readonly></span>
        </form>
       
</div>
<hr>
<?php
   }
     }
    }
}
            }
        }
?>
</div>