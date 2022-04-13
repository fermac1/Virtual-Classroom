<?php
include('login_data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container-fluid mainDiv" id="main">
        <div class="overlay" id="ovrlay">
        
        <h1>Virtual Classroom</h1>
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-10">
                <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium repellendus sunt pariatur. Delectus debitis pariatur tenetur cum placeat perspiciatis velit, quasi nemo laboriosam maiores laborum similique quibusdam sunt odio consequatur.</p>
               
                <button id="signupbtn">SignUp</button>
                <button id="loginbtn">Login</button>
            
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 form" id="login">        
                <?php include('login.php'); ?>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 form" id="signup">  
                <?php include('signup.php'); ?>
            </div>

            

    <center>
            <footer id="footer">
            
            <p>Virtual Classroom &copy2022</p>
                <p>Programmed by: Pamela Fermac</p>
            </footer>
    </center>

        </div>
        

        

  
    
    </div><!--/overlay-->

    </div>


  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/home.js"></script>
</body>
</html>