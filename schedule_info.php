    <div class="row">
       
        <div class="col-lg-12">
            <!-- <input type="" id="schedule-row" name="schedule" value="" readonly> -->
    <form action="start_class.php" method="POST">
            <div class="row">
                <div class="col-lg-4">
                <!-- <b>Course:</b>
                <input type="text" name="classcourse" value="" readonly> -->
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
