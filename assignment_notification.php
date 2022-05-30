<div class="row">
                <div class="col-lg-3">
                <b>Course Code:</b>
                </div>
                <div class="col-lg-8">
                    <?php echo $assign_course; ?>
                </div> 
            </div>

            <div class="row">
                <div class="col-lg-3">
                <b>Name:</b>
                </div>
                <div class="col-lg-8">
                <?php echo ucfirst($firstname), '&nbsp;', ucfirst($lastname);?>
                </div> 
            </div>

            <div class="row">
                <div class="col-lg-3">
                <b>File:</b>
                </div>
                <div class="col-lg-8 notification-file">
                <a href="assignment/<?php echo $row["file_name"]?>" target="_blank" class="notification-file">
                <?php echo $file;?></a>
                </div> 
            </div>

            <div class="row">
                <div class="col-lg-3">
                <b>Description:</b>
                </div>
                <div class="col-lg-8">
                <?php echo $description;?>
                </div> 
            </div>

            <hr class="notification-hr">
