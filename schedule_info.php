<?php
// $current_date = date("Y-m-d");
// $current_time = date("h:i:s");

//   if($date = $current_date){
//       if($time = $current_time){
//         //   echo $date;
//           $delete = mysqli_query($conn, "DELETE * FROM schedule_class WHERE date='$current_date' AND time = '$current_time' ");
//         //   echo $current_time;
//           if($delete){
//               echo 'yay';
//           }else{
//               echo 'nay';
//           }
//       }
//   }
?>
    <div class="row">
       
        <div class="col-lg-12">
            <!-- <input type="" id="schedule-row" name="schedule" value="" readonly> -->
    <form action="" method="POST">
            <div class="row">
                <div class="col-lg-4">
                <span><b>Course:</b> <?php echo $course_code; ?></span>
                </div>
                <div class="col-lg-5">
                <span><b>Date:</b> <?php echo $date; ?></span>
                </div>
                <div class="col-lg-3">              
                <span><b>Time: </b><?php echo $time; ?></span>
                </div>
            </div>
            
<button type="submit" name="start" class="schedule-button">Start Class</button>
</form>
        </div>
      <hr class="schedule-hr">
    </div>
