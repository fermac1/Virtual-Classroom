<?php
// include('login_data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
    <title>Login</title>
</head>
<body>
  <!-- <div class="container"> -->
    <form class="form-tag" action="index.php" method="POST" onsubmit = "return validation();">
    <div class="row">
    <h4>Sign in</h4>
  
      <div class="col-lg-8 col-md-8 form-group inputBox">
          <input type="email" class="form-control email" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
      </div>
      <div class="col-lg-8 col-md-8 form-group inputBox">
          <input type="password" class="form-control password" id="password" name="password" placeholder="Password" required>
      </div>
    </div>
        <!-- error -->
        <div class="error">
        <?php
          echo $error;
        ?>
        </div>

        <div class="form-row row" id="row">
          <div class=" form-check col-lg-6 col-md-7 col-sm-12">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
            
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p><a href="forgot_password.php">Forgot Password?</a></p>
            </div>
        </div> <!--/form-row-->
      
        <div class="form-group">
            <button type="submit" id="submit" name="login" class="btn btn-primary btnBox">Login</button>
        </div>
        
        <div class="form-group">
          <p>Not registered yet? <a href="#" class="signuplink">Register here</a></p>
      </div>

        </form>
        
  <!-- </div> -->
  
</body>
</html>