<style>
  @media screen and (max-width: 576px) {
    .course-list{
      width: 83.33%;
    }
    .col-xs-3{
      /* background-color: red; */
      width: 80%;
    }
    .col-xs-1{
      /* background-color: blue; */
      width: 3%;
    }
  }
</style>
          <form method='post' action="course_reg_list.php">
          <div class='list-group-item course-list'>
          
            <div class='row' name='id'>
            
            <div class='col-lg-10 col-md-10 col-sm-10 col-xs-3'>
            
            <input type="" name="course" id="course-row" value="<?php echo $course; ?>" readonly><br>
            
            </div>
            <div class='col-lg-2 col-md-2 col-sm-1 col-xs-1 dropdown dropbtn'>
            <i class='bx bx-dots-vertical-rounded' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'></i>
            
            <div class='dropdown-menu nav-pills dropdown-menu-right' id="v-pills-tab" role="tablist" aria-labelledby='dropdownMenuLink'>

            
              <button class='dropdown-item list' href='' name='reg-list' type='submit'> list of registered students</button>

              <a class='dropdown-item' onclick="displayCourse('<?php echo $course;?>')"  data-userid="<?php echo $row['id'];?>"  href='schedule_class.php?coursecode=<?php echo $course;?>'>schedule a class</a>

              <a class='dropdown-item' onclick="displayDetails('<?php echo $course;?>')"  data-userid="<?php echo $row['id'];?>" href='add_course_details.php?coursecode=<?php echo $course;?>'>Add course description</a>

              <a class='dropdown-item' name="coursed" onclick="display('<?php echo $course;?>')"  data-userid="<?php echo $row['id'];?>" href="course_details.php?id=<?php echo $courseid;?>" >Course details</a>
              
              <a class='dropdown-item' name="deleteid" data-bs-toggle='modal' data-bs-target='#staticBackdropdelete' onclick="disp('<?php echo $course;?>')"  data-userid="<?php echo $row['id'];?>" href="display_teacher_course.php#staticBackdropdelete">Delete this course</a>
            </div>
</form>
                  
                                    <!-- delete Modal -->
  <div class='modal fade' id='staticBackdropdelete' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
      <div class='modal-content'>
        <div class='modal-header'> 
          
           <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <form action="delete_course.php" method="post">
        <div class='modal-body' id="modal-course">
            
          Are you sure you want to delete <input name="modal-course-input" class="modal-input" id="modal-course-input" readonly>
         
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary btnBox' data-bs-dismiss='modal'>No</button>
          <button type='submit' name='deleteBtn' id='deleteBtn' class='btn btn-primary btnBox'>Yes</button>
        </div> 
        </form>
       </div>
    </div>
  </div>
        
                </div>
                </div><!--/row-->
              </div><!--/list-group-item-->
              
              </form>


              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  
<script>

function disp(par) {

var file = document.getElementById('modal-course-input');
file.value=par;
return;
}

</script>
