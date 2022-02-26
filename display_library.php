
                
               
                <div class='list-group-item '>
                <form method='post' action="display_library.php" class="form">
                  <div class='row'>
                  <div class='col-lg-11'>
                  <input type="" name="file" id="file-row" value=" <?php echo $fileName;?>" readonly><br>

                  </div>
                <div class='col-lg-1 dropdown'>
                <i class='bx bx-dots-vertical-rounded' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'></i>
                  
                  <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                    <a class='dropdown-item' href=''>open</a>
                    <!-- <button class='dropdown-item' type='submit' name="delete-modal" data-bs-toggle='modal' data-bs-target='#delete'>delete</button> -->
                  
                   <button type="submit" class='dropdown-item' name="delete-modal" id='delete-modal' data-bs-toggle='modal' data-bs-target='#delete'>Delete this course</button>
                    <a class='dropdown-item' href='' data-bs-toggle='modal' data-bs-target='#rename'>rename</a>
                    <a class='dropdown-item' href=''data-bs-toggle='modal' data-bs-target='#details'>details</a>
                  </div>



                  <!-- delete Modal -->
  <div class='modal fade' id='delete' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='deleteLabel' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
      <div class='modal-content'>
        <div class='modal-header'>
          <!-- <h5 class='modal-title' id='staticBackdropLabel'>Modal title</h5> -->
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <form action='delete_file.php' method='post'>
          <input type="hidden" name="delete-row">
        <div class='modal-body' id="modal-bdy">
  
          Are you sure you want to delete file(<?php include('display_library_options.php');?>)?
         
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
          <button type='submit' name='deletefile' id='deletefile' class='btn btn-primary'>Delete</button>
        </div>
        </form>
      </div>
    </div>
  </div>

        
                  <!-- rename Modal -->
    <div class='modal fade' id='rename' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='renameLabel' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
      <div class='modal-content'>
        <div class='modal-header'>
          <!-- <h5 class='modal-title' id='staticBackdropLabel'>Modal title</h5> -->
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <form action='delete_file.php' method='post'>
        <div class='modal-body'>
            
          <input type="text" name="rename-input" id="rename-input">
         
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
          <button type='submit' name='rename' id='rename' class='btn btn-primary'>Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>

                </div>
                </div><!--/row-->
</div><!-- /list-group-item-->
                </form> 

                