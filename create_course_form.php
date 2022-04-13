<?php
include('teacher_dashboard.php');
?>
<div class="sub-section not-dashboard">
<h3 class="mb-4">Create Course</h3>
            <?php include ('teacher_create_course.php');?>
                <form action="" method="post">
                
                    <div class="row">
                        <div class="col-md-8">
                            <?php echo $statusMsg;?>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                              <label>course code</label>
                              <input type="text" class="form-control" name="course_code" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                              <label>course title</label>
                              <input type="text" class="form-control" name="course_title" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                              <label>credit load</label>
                              <select class="form-control form-control-sm inputBox" name="credit_load" id="credit_load" required>
                                  <option selected>...</option>
                                  <option value="0">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                              </select>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary btnBox" type="submit" name="create">Create</button>
                </div>
                </form>
</div>