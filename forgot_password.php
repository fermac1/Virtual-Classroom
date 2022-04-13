<?php
include('connect.php');
$msg='';
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $query = "SELECT * FROM users WHERE email ='$email'";
    $run = mysqli_query($conn,$query);

    if(mysqli_num_rows($run) > 0){
        $row = mysqli_fetch_array($run);
        $db_email = $row['email'];
        $db_id = $row['id'];
        $token = uniqid(md5(time())); //random token

        $insert = "INSERT INTO password_reset(id, email, token) VALUES(NULL, '$email', '$token')";
        if(mysqli_query($conn, $insert)){
            $to = $db_email;
            $subject = "Password reset link";
            $message = "Click <a href='https://YOUR_WEBSITE.com/reset.php?token=$token'>here</a> to reset your password.";
            $headers = "MIME-VERSION: 1.0". "\r\n";
            $headers = "Content-type:text/html;charset=UTF-8". "\r\n";
            $headers = "From: <demo@demo.com>". "\r\n";
            mail($to, $subject, $message, $headers);

            $msg = "<div class='alert alert-success'>Password reset link has been sent to the email</div>";
        }
    }else{
        $msg = "<div class='alert alert-danger'>User not found</div>";
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
    <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
    <title>forgot password</title>
</head>
<body>
    <div class="container-fluid mainDiv">
    <div class="overlay">
        <div class="row forgot-password">
        <h1>Forgot Password</h1>
            <div class="col-lg-12 col-md-12">
                
                <form action="forgot_password.php" method="post">
                    <div class="form-group">
                        
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <?php if(isset($msg)){ echo $msg; } ?>
                    <div class="form-group">
                        <button name="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>