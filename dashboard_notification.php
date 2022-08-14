<div class="row">
    <div class="col-lg-12">
        <?php
        include('connect.php');
        
        $id = $_SESSION['id'];

        //check for created courses
        $sql = mysqli_query($conn, "SELECT * FROM courses WHERE userID='$id' LIMIT 3");
        if(mysqli_num_rows($sql) > 0){
            while($data = mysqli_fetch_assoc($sql)){
                $course = $data['course_code'];
                
            // }

            include('dashboard_assignment_notification.php');
            include('dashboard_attendance_notification.php');
            // else{
            //     echo '<p>You do not have any notifications yet</p>';
            // }
        }
        }
        // else{
        //     echo 'no created courses';
        // }
        ?>
    </div>
</div>