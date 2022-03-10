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
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container-fluid">
        
        
        <h1>Virtual Classroom</h1>
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-12">
                <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium repellendus sunt pariatur. Delectus debitis pariatur tenetur cum placeat perspiciatis velit, quasi nemo laboriosam maiores laborum similique quibusdam sunt odio consequatur.</p>
                <!-- <a class="signup" href="signup.php">SignUp</a> -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 login">
    <?php include('login.php'); ?>
            </div>
        </div>
        

        

        <center>
            <footer>
            
            <p>Virtual Classroom &copy2022</p>
                <p>Programmed by: Pamela Fermac</p>
            </footer>
    </center>
    
    </div>
</body>
</html>