
<div class="list-group-item">
<form action="delete_file.php" method="post">
    <div class="row">
       
        <div class="col-lg-11">
            <input type="" id="file-row" name="file" value="<?php echo $fileName;?>" readonly>
            
            
        </div>


        <div class="col-lg-1 dropdown">
            <i class='bx bx-dots-vertical-rounded' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'></i>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a href="library/<?php echo $row["file_name"]?>" target="_blank" class="dropdown-item">Open</a>
                <a class='dropdown-item mybtn' name="delete-modal" id='delete-modal' data-bs-toggle='modal' data-bs-target='#delete' onclick="showHint('<?php echo $fileName;?>')"  data-userid="<?php echo $row['id'];?>" href="dsp_lib.php#delete">Delete</a>
                <a href="" class="dropdown-item">Rename</a>
                <a href="" class="dropdown-item">Details</a>
            </div>
        </div>
      
    </div>
</form>



    <!-- delete Modal -->
    <div class='modal fade modal-delete' id='delete' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='deleteLabel' aria-hidden='true'>
        <div class='modal-dialog modal-sm'>
          <div class='modal-content'>
            <div class='modal-header'>
              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <form action="delete_file.php" method="post">
            <div class='modal-body' id="modal-bdy">
     
             
              Are you sure you want to delete file <input name="modal-input" id="modal-input" readonly>
             
            </div>
            <div class='modal-footer'>
              <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
              <button type='submit' name='deletefile' id='deletefile' class='btn btn-primary'>Delete</button>
            </div>
            </form>
          </div>
        </div>
      </div>

   
</div>



<script>

    // onkeyup="showHint(this.value)"
function showHint(str) {
    
    var file = document.getElementById('modal-input');
    file.value=str;
    // var butid= document.getElementsByName('fileid')[0]

    // console.log(but.value)
    // console.log(butid.value)
    // console.log(str)

    // console.log("herrr")
    // if (str.length == 0) {
        // document.getElementById("txtHint").innerHTML = str;
        return;
    // } else {
    //     var xmlhttp = new XMLHttpRequest();
    //     xmlhttp.onreadystatechange = function() {
    //         if (this.readyState == 4 && this.status == 200) {
    //             document.getElementById("txtHint").innerHTML = this.responseText;
    //         }
    //     };
    //     xmlhttp.open("GET", "gethint.php?q=" + str, true);
    //     xmlhttp.send();
    // }
}
</script>