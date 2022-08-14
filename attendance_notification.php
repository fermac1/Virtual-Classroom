
<form action="attendance_list.php" method="post">
<div class="row">
                <div class="col-lg-3">
                <b>Attendance:</b>
                </div>
                <div class="col-lg-4">
                    <input type="text" id="course-row" name="course-row" value="<?php echo $course; ?>" readonly>
                </div> 
            
            <div class="col-lg-4">
            <button type="submit" id="open-attendance" name="open_attendance">Open</button>
            </div>
            </div>      
</form>

            <hr class="notification-hr">
