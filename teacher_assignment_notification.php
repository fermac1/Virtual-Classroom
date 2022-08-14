<?php
             //check for assignments
             $assign = mysqli_query($conn, "SELECT * FROM assignment WHERE course_code='$course' ORDER BY id DESC");
             if(mysqli_num_rows($assign) > 0){
                 while($row = mysqli_fetch_assoc($assign)){
                     $assign_course = $row['course_code'];
                     $description = $row['description'];
                     $file = $row['file_name'];
                     $user_id = $row['userID'];
                     $row_id = $row['id'];

?>
    <h5>Assignment Submission</h5>
<?php
                    //get student information
                 $student = mysqli_query($conn, "SELECT * FROM users WHERE id = '$user_id'");
                 if(mysqli_num_rows($student) > 0){
                     while($get = mysqli_fetch_assoc($student)){
                         $firstname = $get["first_name"];
                         $lastname =$get["last_name"];    
                          
                     }
                     include('assignment_notification.php');
                     
                 }else{
                     echo "user not found";
                 }
                 }

             }
            //  else{
            //      echo "<p>You do not have any notifications yet</p>";
            //  }
?>