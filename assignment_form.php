<div class="container assignment">
    <div class="row">
        <?php include('assignment.php'); $statusMsg='';?>
        <form action="student_dashboard.php" method="post" enctype="multipart/form-data">
            <div class="col-lg-12 assign-col">
            <b>Course code:</b>
            <input type="text" name="input-course" id="input-course" required>
            </div>
            <div class="col-lg-12 assign-col">
                <b>Add File:</b>
            <input type="file" name="assign_file" id="assign_file" required/>
            </div>
            <div class="col-lg-12 assign-col">
                <label for=""><b>Description:</b></label>
                <p><textarea name="description" id="description" cols="20" rows="10"></textarea></p>
                
            </div>
            <div>
                <button name="assignment" class="assignment-button">Submit</button>
            </div>
        </form>
    </div>
</div>