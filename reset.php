<?php
include('connect.php');
$msg='';

 if(isset($_GET['token'])){
    $token = mysqli_real_escape_string($conn, $_GET['token']);
    $query = "SELECT * FROM password_reset WHERE token = '$token'";
    $run = mysqli_query($conn, $query);

    if(mysqli_num_rows($run) > 0){
        $row = mysqli_fetch_array($run);
        $token = $row['token'];
        $email = $row['email'];
    }else{
        header("location:index.php");
    }
 }

if(isset($_POST['submit'])){
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
    $pass = md5($password);

    if($password!=$confirmpassword){
        $msg = "<div class='alert alert-danger'>Passwords does not match</div>";
    }elseif(strlen($password) < 6){
        $msg = "<div class='alert alert-danger'>Password must be 6 characters long</div>";
    }else{
        $update = "UPDATE users SET password='$pass' WHERE email = '$email' ";
        mysqli_query($conn, $update);
        $delete = "DELETE FROM password_reset WHERE email = '$email' ";
        mysqli_query($conn, $delete);
        $msg = "<div class='alert alert-success'>Password Updated</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Reset Password</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $email;?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control">
                    </div>
                    <?php if(isset($msg)){ echo $msg; } ?>
                    <div class="form-group">
                        <button name="submit" class="btn btn-primary btn-block">Reset Password </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>