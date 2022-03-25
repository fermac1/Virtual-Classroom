<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
    <form action="add_user.php" method="POST" class="form-tag">
        <h4>Sign Up</h4>
      <div class="col-lg-8 col-md-8 form-group inputBox">
          <input type="email" class="form-control email" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
      </div>
      <div class="col-lg-8 col-md-8 form-group inputBox">
          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required> 
      </div>
      <div class="col-lg-8 col-md-8 form-group inputBox">
          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" required>  
      </div>
      <div class="col-lg-8 col-md-8 form-group inputBox">
          <input type="password" class="form-control password" id="password" name="password" placeholder="Password" required>
      </div>
      <div class="col-lg-8 col-md-8 form-group inputBox">
      <select class="form-control form-control-sm inputBox" name="role"  required>
            <option selected>select..</option>
            <option>Teacher</option>
            <option>Student</option>
      </select>
      </div>
      <div class="col-lg-8 col-md-8 form-group inputBox">
      <div class="option-row row" required>
            <div class=" col-sm-4 col-md-3">Gender:</div>
                
              <div class="form-check col-sm-6 col-md-5">
                <input type="radio" class="form-radio-input" id="exampleCheck1" name="gender" value="Female">
                <label class="form-radio-label" for="exampleCheck1">Female</label>
              </div>
              <div class="form-check col-sm-6 col-md-4">
                <input type="radio" class="form-radio-input" id="exampleCheck1" name="gender" value="Male">
                <label class="form-radio-label" for="exampleCheck1">Male</label>
              </div>
            </div> <!--/option-row-->
      </div>

    </div>
        <!-- error -->
        <div class="error">
        <?php
          echo $error;
        ?>
        </div>

        <div class="form-group">
            <button type="submit" id="submit" name="submit" class="btn btn-primary btnBox">Submit</button>
        </div>
        <div class="form-group">
            <p>Already have an account? <a href="#" class="loginlink">Login</a></p>
        </div>

    </form>
    </div>
</body>
</html>