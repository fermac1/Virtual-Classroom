<?php
  // include ('session.php');
  include ('connect.php');
$id = $_SESSION['id'];
  $html=''; $statusMsg='';

  $course_folder = filter_input(INPUT_GET, 'folder', FILTER_SANITIZE_URL);
// File upload path
if(isset($_POST['file_upload'])){
    //  $course_folder = $_POST['general-library-course'];
     $path ="general-library/"; 
  if($_FILES['input_file']['name'] != ''){
    $targetDir = "general-library/". $course_folder."/";
    echo $course_folder;
    $filename = basename($_FILES["input_file"]["name"]);
    $targetFilePath = $targetDir . $filename;
    $size1 = $_FILES['input_file']['size'];
    $size = ($size1/1024)."KB";
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

// if(isset($_POST["file_upload"]) && !empty($_FILES["input_file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','docx','pptx');
    if(in_array($fileType, $allowTypes)){
      // if(!$filename > 0){
        // Upload file to server
        if(move_uploaded_file($_FILES["input_file"]["tmp_name"], $targetFilePath)){
          //check if this file already exist
          $check = mysqli_query($conn, "SELECT * FROM general_library WHERE file_name = '$filename' and teacher_id='$id' ");

          if(mysqli_num_rows($check) > 0){
            
            $statusMsg = "<div class='alert alert-warning' role='alert'>
                This file already exists.
              </div>";
          }else{
              // Insert image file name into database
              $insert = $conn->query("INSERT INTO `general_library` (`teacher_id`, `course_code`, `file_name`, `file_path`, `size (KB)`)
              VALUES('$id', '$course_folder', '$filename', '$targetFilePath', '$size')");
              if($insert){
                  $statusMsg = "<div class='alert alert-success' role='alert'>
                  The file '$filename'  has been uploaded successfully.
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
