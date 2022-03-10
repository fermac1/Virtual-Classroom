<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
    <form action="add_user.php" method="POST" class="form-tag">
        <h4>Sign Up</h4>
        <div class="form-group inputBox">
              <input type="email" class="form-control email" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>      
            </div>
            <div class="form-group inputBox">
                <input type="text" class="form-control text" id="first_name" name="first_name" placeholder="First name" required>      
              </div>
              <div class="form-group inputBox">
                <input type="text" class="form-control text" id="last_name" name="last_name" placeholder="Last name" required>      
              </div>
            <div class="form-group inputBox">
              <input type="password" class="form-control password" id="password" name="password" placeholder="Password" required>
            </div>
    
            <select class="form-control form-control-sm inputBox" name="role"  required>
            <option selected>select..</option>
            <option>Teacher</option>
            <option>Student</option>
            </select>

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

        

            <!-- <div class="option-row row" required>
                <p>Are you a Teacher?</p>
              <div class="form-check col-sm-12 col-md-12">
                <input type="checkbox" class="form-radio-input" id="exampleCheck1" name="role" value="Teacher">
                <label class="form-radio-label" for="exampleCheck1">Teacher</label>
              </div>
              <div class="form-check col-sm-12 col-md-12">
                <input type="checkbox" class="form-radio-input" id="exampleCheck1" name="role" value="Student">
                <label class="form-radio-label" for="exampleCheck1">Student</label>
              </div>
            </div> -->
             <!--/option-row-->

        <div class="form-group">
            <button type="submit" id="submit" name="submit" class="btn btn-primary btnBox">Submit</button>
        </div>
        <div class="form-group">
            <p>Already have an account? <a href="index.php">Login</a></p>
        </div>
        <svg width="500" height="111" viewBox="0 0 800 111" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0L53 4.17052C107 8.34104 213 16.6821 320 30.7977C427 45.2341 533 65.7659 640 69.9364C747 74.1069 853 61.5954 960 57.7457C1067 53.5751 1173 57.7457 1227 59.6705L1280 61.5954V111H1227C1173 111 1067 111 960 111C853 111 747 111 640 111C533 111 427 111 320 111C213 111 107 111 53 111H0V0Z" fill="#93b7cd" fill-opacity="0.8"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 44.4L42.6667 53.28C85.3333 62.16 170.667 79.92 256 75.48C341.333 71.04 426.667 44.4 512 26.64C597.333 8.88 682.667 0 768 0C853.333 0 938.667 8.88 1024 24.42C1109.33 39.96 1194.67 62.16 1237.33 73.26L1280 84.36V111H1237.33C1194.67 111 1109.33 111 1024 111C938.667 111 853.333 111 768 111C682.667 111 597.333 111 512 111C426.667 111 341.333 111 256 111C170.667 111 85.3333 111 42.6667 111H0V44.4Z" fill="#114f66" fill-opacity="0.8"/>
            </svg>
    </form>
    </div>
</body>
</html>