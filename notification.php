<?php
include('teacher_dashboard.php');
?>
<div class="container sub-section not-dashboard">
    <!-- <p>You do not have any notifications yet</p> -->
    <div class="row">
    <h3>Notifications</h3>
        <div class="col-lg-12">
        
        <?php
        include('connect.php');
        // include('session.php');
        $id = $_SESSION['id'];

        // check for registered courses
        $sql = mysqli_query($conn, "SELECT * FROM courses WHERE userID='$id' ");
        if(mysqli_num_rows($sql) > 0){
            while($data = mysqli_fetch_assoc($sql)){
                $course = $data['course_code'];
            // }
    include('teacher_assignment_notification.php');
    include('teacher_attendance_notification.php');
            }
        }
        // else{
        //     echo "no created courses";
        // }
        ?>
    </div>
    </div>
</div>