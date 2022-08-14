<style>
  @media screen and (max-width: 576px) {
    .file-list{
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

<div class="list-group-item file-list">
<form action="delete_file.php" method="post">
    <div class="row dropdown">
       
    <div class='col-lg-11 col-md-10 col-sm-10 col-xs-3 file-list' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <input contenteditable type="text" id="file-row" name="file" value="<?php echo $fileName;?>"  readonly>
            
        </div>


            <div class="dropdown-menu dropdown-menu-left col-lg-1 col-md-2 col-sm-1 col-xs-1" aria-labelledby="dropdownMenuLink">
                <a href="general-library/<?php echo $row['course_code']; echo "/"; echo $row["file_name"]?>" target="_blank" class="dropdown-item">Open</a>
                <a class='dropdown-item mybtn' name="delete-modal" id='delete-modal' data-bs-toggle='modal' data-bs-target='#delete' onclick="showHint('<?php echo $fileName;?>')"  data-userid="<?php echo $row['id'];?>" href="display_library.php#delete">Delete</a>
                
            </div>
        <!-- </div> -->
      
    </div>
</form>



    <!-- delete Modal -->
    <div class='modal fade modal-delete' id='delete' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='deleteLabel' aria-hidden='true'>
        <div class='modal-dialog modal-md'>
          <div class='modal-content'>
            <div class='modal-header'>
              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            
            <form action="delete_general_lib.php" method="post">
            <div class='modal-body' id="modal-bdy">
     
             
              Are you sure you want to delete file <input name="modal-input" id="modal-input" readonly>
             
            </div>
            <div class='modal-footer'>
              <button type='button' class='btn btn-secondary btnBox' data-bs-dismiss='modal'>Cancel</button>
              <button type='submit' name='deletefile' id='deletefile' class='btn btn-primary btnBox'>Delete</button>
            </div>
            </form>
          </div>
        </div>
      </div>

   


  </div>
  <!-- /list-group-item -->

  <script src="js/lib.js?v=<?php echo time(); ?>"></script>
