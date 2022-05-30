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

    <style>
  @media screen and (max-width: 768px) {
    .option-row{
      width: 500px;
    }

  }
  @media screen and (max-width: 576px) {
    .option-row{
      width: 500px;
    }
    .col-xs-2{
      width: 20%;
    }
    .col-xs-3{
        width: 25%;
    }

  }
    </style>
</head>
<body>
    <div class="container">
        <?php include('add_user.php'); ?>
    <form action="" method="POST" class="form-tag">
        <h4>Sign Up</h4>
        <div>
            <?php echo $msg; ?>
        </div>
      <div class="col-lg-12 col-md-8 form-group inputBox">
          <input type="email" class="form-control email" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
      </div>
      <div class="col-lg-12 col-md-8 form-group inputBox">
          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required> 
      </div>
      <div class="col-lg-12 col-md-8 form-group inputBox">
          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" required>  
      </div>
      <div class="col-lg-12 col-md-8 form-group inputBox">
          <input type="password" class="form-control password" id="password" name="password" placeholder="Password" required>
      </div>
      <div class="col-lg-12 col-md-8 form-group inputBox">
      <select class="form-control form-control-sm" name="role"  required>
            <option selected>select..</option>
            <option>Teacher</option>
            <option>Student</option>
      </select>
      </div>
      <div class="col-lg-12 col-md-8 col-sm-10 form-group inputBox">
      <div class="option-row row" required>
            <div class="col-xs-2 col-sm-2 col-md-3 col-lg-3">Gender:</div>
                
              <div class="form-check col-xs-3 col-sm-3 col-md-4 col-lg-5">
                <input type="radio" class="form-radio-input" id="exampleCheck1" name="gender" value="Female">
                <label class="form-radio-label" for="exampleCheck1">Female</label>
              </div>
              <div class="form-check col-xs-2 col-sm-3 col-md-3 col-lg-4">
                <input type="radio" class="form-radio-input" id="exampleCheck1" name="gender" value="Male">
                <label class="form-radio-label" for="exampleCheck1">Male</label>
              </div>
            </div> <!--/option-row-->
      </div>

    </div>

       <div class="row">
       <div class="form-group col-sm-10">
            <button type="submit" id="submit" name="submit" class="btn btn-primary btnBox">Submit</button>
        </div>
       </div>
        <div class="form-group">
            <p>Already have an account? <a href="#" class="loginlink">Login</a></p>
        </div>

    </form>
    </div>
</body>
</html>