<div class="row">
    <div class="col-lg-12">
        <?php
        include('connect.php');
        $html="";
        $id = $_SESSION['id'];

        //check for registered courses
        $sql = mysqli_query($conn, "SELECT * FROM courses WHERE userID='$id' LIMIT 2");
        if(mysqli_num_rows($sql) > 0){
            while($data = mysqli_fetch_assoc($sql)){
                $course = $data['course_code'];
                
            // }
            //check for assignments
            $assign = mysqli_query($conn, "SELECT * FROM assignment WHERE course_code='$course' ORDER BY id ASC");
            if(mysqli_num_rows($assign) > 0){
                while($row = mysqli_fetch_assoc($assign)){
                    $assign_course = $row['course_code'];
                    $description = $row['description'];
                    $file = $row['file_name'];
                    $user_id = $row['userID'];
                    
                // }
                    //get student information
                    $student = mysqli_query($conn, "SELECT * FROM users WHERE id = '$user_id'");
                    if(mysqli_num_rows($student) > 0){
                        while($get = mysqli_fetch_assoc($student)){
                            $firstname = $get["first_name"];
                            $lastname =$get["last_name"];
        
                        }
                    //     $html .="  <div class='row'>
                    //     <div class='col-lg-12'>
                    //         <p> <b>{$assign_course}</b> assignment submitted by <b>{$firstname}  {$lastname}</b> </p>
                    //     </div>
                    // </div>";
                    // echo $html;
?>
                    <div class='row'>
                    <div class='col-lg-12'>
                        <p> <b><?php echo $assign_course; ?></b> assignment submitted by <b><?php echo $firstname,'&nbsp;',  $lastname?></b> </p>
                    </div>
                </div>
                <?php
                    }else{
                        echo 'user not found';
                    }
                }
            }else{
                echo '<p>You do not have any notifications yet</p>';
            }
        }
        }else{
            echo 'no created courses';
        }
        ?>
    </div>
</div>