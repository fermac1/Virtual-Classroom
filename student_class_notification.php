
<form action="join_class.php" method="post">
<div class="row">
    <div class="col-lg-3">
    <b>Course Code:</b>
    </div>
    <div class="col-lg-8">
    <input type="text" name="course-code" value="<?php echo $course_code; ?>" class="schedule-course" readonly>
    </div> 
</div>

<div class="row">
    <div class="col-lg-3">
    <b>Date:</b>
    </div>
    <div class="col-lg-8">
    <?php echo $date;?>
    </div> 
</div>

<div class="row">
    <div class="col-lg-3">
    <b>Time:</b>
    </div>
    <div class="col-lg-8">
    
    <?php echo $time;?>
    </div> 
</div>

<div class="row">
    <div class="col-lg-3">
    <b>Instructor:</b>
    </div>
    <div class="col-lg-8">
    <?php echo ucfirst($firstname).'&nbsp;'. ucfirst($lastname);?>
    </div> 
</div>
<div class="row">
    <div class="col-lg-3">
<!-- <button type="button" name="join" id="join-btn" class="schedule-button">Join Class</button> -->
<button type="submit" name="join" class="schedule-button">Join Class</button>
</div>


</div>
</form>

<hr class="notification-hr">



<script src="AgoraRTC_N-4.7.3.js?v=<?php echo time(); ?>"></script>
