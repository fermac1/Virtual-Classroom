
                <div class='list-group-item course-list'>
                
                  <div class='row'>
                  
                  <div class='col-lg-10 col-md-6'>
                 
                  <input type="" name="course" id="course-row" value="<?php echo $course; ?>" readonly><br>
                  
                  </div>
                  <div class='col-lg-2 col-md-6 dropdown dropbtn'>
                  <i class='bx bx-dots-vertical-rounded' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'></i>
                  
                  <div class='dropdown-menu nav-pills' id="v-pills-tab" role="tablist" aria-labelledby='dropdownMenuLink'>

                  <a class='dropdown-item' name="coursed" href="student_course_details.php?id=<?php echo $courseid;?>" >Course details</a>

                    <a class='dropdown-item' name="unreg" data-bs-toggle='modal' data-bs-target='#staticBackdropreg' onclick="reg('<?php echo $course;?>')"  data-userid="<?php echo $row['id'];?>" href="display_student_course.php#staticBackdropreg">Unregister this course</a>
                  </div>
                  
                                    <!-- delete Modal -->
  <div class='modal fade' id='staticBackdropreg' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
      <div class='modal-content'>
        <div class='modal-header'> 
         
           <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <form action="unregister_course.php" method="post">
        <div class='modal-body' id="modal-course">
            
          Are you sure you want to unregister the course <input name="modal-unreg-input" class="modal-input" id="modal-unreg-input" readonly>
         
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary btnBox' data-bs-dismiss='modal'>No</button>
          <button type='submit' name='unregister' id='unregister' class='btn btn-primary btnBox'>Yes</button>
        </div> 
        </form>
       </div>
    </div>
  </div>
        
                </div>
                </div><!--/row-->
              </div><!--/list-group-item-->
              
              </form>

<script>

function reg(coursepara) {
    var file = document.getElementById('modal-unreg-input');
    file.value=coursepara;
    return;
}

</script>