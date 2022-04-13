<?php
 include('student_dashboard.php');
?>
<div class="sub-section not-dashboard">
<h3 class="mb-4">Profile</h3>

    <div class="">
            <?php 
            	if(!empty($image)){
                echo "<img src=".$image." alt='Image' class='img-circle' width='100%'/>";
                
              }else{
                echo "<img src= 'images/camera.png' class='img-circle' width='100%' />";
                
              }
            ?>
        </div>
    <p><b>Name: &nbsp;</b><?php echo ucfirst($firstname).'&nbsp;'. ucfirst($lastname);?></p>
    <p><b>Email: &nbsp;</b><?php echo $email?></p>
    
    <form action="" method="post" enctype="multipart/form-data">
      <div class="row">
    <div class="col-md-12">
								<div class="form-group">
								  	<label>Upload photo</label>
								  	<input type="file" class="form-control" name="input_image" id="input_image">
								</div>
							</div>
              </div>
              <button class="btn btn-primary btnBox" type="submit" name="submit">Upload</button>
    </form> 
    </div>