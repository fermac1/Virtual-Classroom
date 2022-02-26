<?php
//   session_start();
  include ('connect.php');
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