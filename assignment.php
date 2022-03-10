<?php
include('connect.php');
// include('session.php');

$id = $_SESSION['id'];
  $html=''; $statusMsg='';
// File upload path
if(isset($_POST['assignment'])){
      $coursecode = $_POST['input-course'];
      $description = $_POST['description'];

  if($_FILES['assign_file']['name'] != ''){
    $targetDir = "assignment/";
    $filename = basename($_FILES["assign_file"]["name"]);
    $targetFilePath = $targetDir . $filename;
    $size1 = $_FILES['assign_file']['size'];
    $size = ($size1/1024)."KB";
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    // $fileContent = file_get_contents($_FILES["assign_file"]["tmp_name"]);
    // readfile($targetFilePath);

    $allowTypes = array('jpg','png','jpeg','gif','pdf','docx','pptx');
    if(in_array($fileType, $allowTypes)){
      // if(!$filename > 0){
        // Upload file to server
        if(move_uploaded_file($_FILES["assign_file"]["tmp_name"], $targetFilePath)){
          //check if this file already exist
          $check = mysqli_query($conn, "SELECT * FROM assignment WHERE file_name = '$filename' and userID='$id' ");

          if(mysqli_num_rows($check) > 0){
            
            $statusMsg = "<div class='alert alert-warning' role='alert'>
                This file already exists.
              </div>";
          }else{
              // Insert image file name into database
              $insert = $conn->query("INSERT INTO `assignment` (`userID`, `course_code`, `file_name`, `file_path`, `description`)
              VALUES('$id', '$coursecode','$filename', '$targetFilePath', '$description')");
              if($insert){
                  $statusMsg = "<div class='alert alert-success' role='alert'>
                  Assignment has been submitted successfully.
                </div>";
              }else{
                  $statusMsg = "<div class='alert alert-warning' role='alert'>
                  File upload failed, please try again.</div>";
              }
            }
          
        }else{
            $statusMsg = "<div class='alert alert-danger' role='alert'>
            Sorry, there was an error uploading your file.</div>";
        }
    // }else{
    //     $statusMsg = 'file already exists';
    // }
  }else{
    $statusMsg = "<div class='alert alert-warning' role='alert'>
    Sorry, only JPG, JPEG, PNG, GIF, PDF, DOCX & PPTX files are allowed to upload.</div>";
  }
}else{
    $statusMsg = "<div class='alert alert-info' role='alert'>
    Please select a file to upload.</div>";
}
}

// Display status message
echo $statusMsg;
?>