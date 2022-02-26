
                <div class='list-group-item '>
                  <div class='row'>
                  <div class='col-lg-10 col-md-6' name='course'>
                  
                  <?php echo $course;?><br>
                  
                  </div>
                <div class='col-lg-2 col-md-6 dropdown dropbtn'>
                  <img src='svg/options-vertical-svgrepo-com.svg'  alt='' class='dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                  
                  <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                    <a class='dropdown-item' href='' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Unregister this course</a>
                  </div>
                  

                  <!-- delete Modal -->
  <div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
      <div class='modal-content'>
        <div class='modal-header'>
          <!-- <h5 class='modal-title' id='staticBackdropLabel'>Modal title</h5> -->
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <form action='unregister_course.php' method='post'>
        <div class='modal-body'>
            
          Are you sure you want to delete file?
         
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
          <button type='submit' name='unregister' id='unregister' class='btn btn-primary'>Unregister</button>
        </div>
        </form>
      </div>
    </div>
  </div>

        
                </div>
                </div><!--/row-->
              </div><!--/dropdown-->
              

             

      