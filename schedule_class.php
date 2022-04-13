<?php
    include('teacher_dashboard.php');    
?>
<link rel="stylesheet" href="css/schedule.css">
 <!-- schedule tab -->
  <div class="container sub-section not-dashboard">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 schedule-box">
            <h4>Schedule a class</h4>
            <div class="row schedule-form">
                <?php include('schedule.php'); echo $statusMsg; ?>
            <form action="schedule_class.php" method="post">
              <div class="col-lg-12 col-md-4 col-sm-4 schedule-col">
              <label for="">Course:</label>
              <input name="schedule-class-input" class="schedule-input" id="schedule-class-input" required>
              </div>
              <div class="col-lg-12 col-md-4 col-sm-4 schedule-col">
              <label for="">Date:</label>
              <input type="date" name="schedule-date" id="schedule-date" required>
              </div>
              <div class="col-lg-12 col-md-4 col-sm-4 schedule-col">
              <label for="">Time:</label>
              <input type="time" name="schedule-time" id="schedule-time" required>
              </div>
              <button type="submit" name="schedule">Schedule</button>
            </form> 
            </div>
 
        </div>
    </div>
  </div>




