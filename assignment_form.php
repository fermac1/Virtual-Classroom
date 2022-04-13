<?php
include('student_dashboard.php');
?>
<div class="container assignment sub-section not-dashboard">
    <h4>Assignment</h4>
    <div class="row">
        <div class="col-lg-12">
        <?php include('assignment.php'); $statusMsg='';?>
        <form action="" method="post" enctype="multipart/form-data">

        <div class="row assign-col">
            <div class="col-lg-4 col-md-4 col-sm-3">
            <label for=""><b>Course code:</b> </label>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-4">
            <input type="text" name="input-course" id="input-course" required>
            </div>
        </div>

        <div class="row assign-col">
            <div class="col-lg-4 col-md-4 col-sm-3">
            <label for=""><b>Add File:</b> </label>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-4">
            <input type="file" name="assign_file" id="assign_file" required/>
            </div>
        </div>

        
        <div class="row assign-col">
            <div class="col-lg-4 col-md-4 col-sm-3">
            <label for=""><b>Description:</b> </label>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-4">
            <textarea name="description" id="description" cols="50" rows="10"></textarea>
            </div>
        </div>

            <div>
                <button name="assignment" class="assignment-button">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>