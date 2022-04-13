<div class="row">
    <div class="col-lg-3">
    <b>Course Code:</b>
    </div>
    <div class="col-lg-8">
        <?php echo $course_code; ?>
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
<button type="submit" name="join" class="schedule-button">Join Class</button>
</div>
</div>

<hr class="notification-hr">