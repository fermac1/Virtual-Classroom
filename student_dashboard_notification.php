<div class="row">
    <div class="col-lg-12">
        <?php
        include('connect.php');
        
        $id = $_SESSION['id'];

        //check for registered courses
        $sql = mysqli_query($conn, "SELECT * FROM course_registration WHERE userID='$id' LIMIT 3");
        if(mysqli_num_rows($sql) > 0){
            while($data = mysqli_fetch_assoc($sql)){
                $course = $data['course_code'];
                
            // }
            //check for class schedule
            $assign = mysqli_query($conn, "SELECT * FROM schedule_class WHERE course_code='$course' ORDER BY date ASC");
            if(mysqli_num_rows($assign) > 0){
                while($row = mysqli_fetch_assoc($assign)){
                    $course_code = $row["course_code"];
                    $class_id = $row['id'];
                    $teacher_id = $row['teacher_id'];
                    $time = $row['time'];
                    $date = $row['date'];
                    
                
                    //get student information
                    $student = mysqli_query($conn, "SELECT * FROM users WHERE id = '$teacher_id'");
                    if(mysqli_num_rows($student) > 0){
                        while($get = mysqli_fetch_assoc($student)){
                            $firstname = $get["first_name"];
                            $lastname =$get["last_name"];
        
                        }
?>
                    <div class='row'>
                    <div class='col-lg-12'>
                        <p> Upcoming class in <b><?php echo $course_code; ?></b> by <b><?php echo ucfirst($firstname),'&nbsp;',  ucfirst($lastname);?></b> </p>
                    </div>
                </div>
                <?php
                    }else{
                        echo 'user not found';
                    }
                }
            }else{
                // echo '<p>You do not have any notifications yet</p>';
            }
        }
        }
        // else{
        //     echo 'no created courses';
        // }
        ?>
    </div>
</div>