
<link rel='stylesheet' type='text/css' media='screen' href='css/class.css?v=<?php echo time(); ?>'>
 <div class="row">
       
        <div class="col-lg-12">
            
    <form action="teacher_schedule.php" method="POST">
            <div class="row">
                <div class="col-lg-6">
               
                <span><b>Course:</b> <input type="text" name="course-code" value="<?php echo $course_code; ?>" class="schedule-course" readonly> </span>
                </div>
                <div class="col-lg-4">
                <span><b>Date:</b> <?php echo $date; ?></span>
                </div>
                <div class="col-lg-3">              
                <span><b>Time: </b><?php echo $time; ?></span>
                </div>
            </div>
            
 
    <button type="submit" name="start" class="schedule-button"> Go to Class</button>

    <button type="submit" name="cancel" id="cancel" class="schedule-button">Cancel</button>
</form>

      <hr class="schedule-hr">
    </div>

