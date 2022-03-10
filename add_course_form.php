<div class="container add-course">
    <h4 class="mb-4">Add Course</h4>
    <?php include('student_add_course.php'); $msg = '';?>
    <form action="student_dashboard.php" method="post">
        <div class="row">
            <!-- <div class="col-md-12"> -->
                <div class="form-group">
                <div class="col-lg-12 col-md-6">
                    <span><b>Course code:</b></span>
                
                    <input type="text" class="form-control" name="course-code" required>
                </div>
            </div>
        </div>

        <div>
            <button class="btn btn-primary btnBox" name="add">Add</button>
        </div>
    </form>
    
</div>