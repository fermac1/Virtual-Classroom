<?php
  include('connect.php');
  include('student_dashboard.php');
?>

  <div class="sub-section not-dashboard">
<h3 class="mb-4">Change Password</h3>

<?php
//   $id = $_SESSION['id'];
  $msg='';
if(isset($_POST['change'])){
    
    $id = $_SESSION['id'];
        $old_password = $_POST['old_password'];
        $old_pass = md5($old_password);
        $new_password = $_POST['new_password'];
        $new_pass = md5($new_password);
        $confirm_newPassword = $_POST['confirm_newpassword'];
        $confirm_newPass = md5($confirm_newPassword);

if ($new_pass == $confirm_newPass){

    if (count($_POST) > 0){
        $sql = "SELECT * FROM users WHERE id = '$id' and password = '$old_pass'";
        $result = mysqli_query($conn, $sql);
        $user_data = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
        if ($count == 1){
            mysqli_query($conn, "UPDATE users SET password='$new_pass' WHERE id='$id' ");
            $msg =   "<div class='alert alert-success' role='alert'>
                    Password changed successfully!
                      </div>";

            // header("location: profile.php?id=".$user_data["id"]);
            
        }
        else {
            $msg = "<div class='alert alert-warning' role='alert'>
            old password is wrong!
              </div>";
            
        }
        
    }
}else{
  $msg = "<div class='alert alert-danger' role='alert'>
    new password does not match!
      </div>";
    
}
mysqli_close($conn);

}
echo $msg;
?>


                

                <form action="" method="post">
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                              <label><b>Old password</b></label>
                              <input type="password" class="form-control" name="old_password" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                              <label><b>New password</b></label>
                              <input type="password" class="form-control" name="new_password" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                              <label><b>Confirm new password</b></label>
                              <input type="password" class="form-control" name="confirm_newpassword" required>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary btnBox" name="change">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </div>
                </form>
</div>