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
                
            </div>
        <!-- </div> -->
      
    </div>
</form>


  </div>
  <!-- /list-group-item -->

  <script src="js/lib.js?v=<?php echo time(); ?>"></script>
