
                <form method='post' action="course_list_options.php">
                <div class='list-group-item course-list'>
                
                  <div class='row' name='id'>
                  
                  <div class='col-lg-10 col-md-6'>
                 
                  <input type="" name="course" id="course-row" value="<?php echo $course; ?>" readonly><br>
                  
                  </div>
                <div class='col-lg-2 col-md-6 '>
                  <i class='bx bx-dots-vertical-rounded'  id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'></i>
                  
                  <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>

                  
                    <button class='dropdown-item list' href='' name='reg-list' type='submit'> list of registered students</button>
                  

                    <a class='dropdown-item' href=''>schedule a class</a>
                    
                    <!-- <a class='dropdown-item' href='' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>delete this course</a> -->
                    <button class='dropdown-item' type='submit' name='deleteid' id='deleteID' class='btn btn-primary'>Delete this course</button>
                  </div>
                  
                                    <!-- delete Modal -->
  <!-- <div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
      <div class='modal-content'>
        <div class='modal-header'> -->
          <!-- <h5 class='modal-title' id='staticBackdropLabel'>Modal title</h5> -->
          <!-- <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        
        <div class='modal-body'>
            
          Are you sure you want to delete file?
         
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
          <button type='submit' name='deleteid' id='deleteID' class='btn btn-primary'>Delete</button>
        </div> -->
        <!-- </form> -->
      <!-- </div>
    </div>
  </div> -->
        
                </div>
                </div><!--/row-->
              </div><!--/list-group-item-->
              
              </form>