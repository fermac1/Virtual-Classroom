<?php
    session_start();
    include('connect.php');
    $error='';

    if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $pass = md5($password);
    
        //to prevent from mysqli injection
        $email = stripcslashes($email);
        $password = stripcslashes($pass);
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $pass);

        //read from database
        //check the two tables for the registered user
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass' limit 1";
        
    
   $result = mysqli_query($conn, $sql);
   if(mysqli_num_rows($result) === 1){
       $row = mysqli_fetch_assoc($result);
       if ($row['email'] === $email && $row['password'] === $pass){
           $user_name = $row['username'];
           $_SESSION['id'] = $row['id'];
           $role = $row['role'];

           if($role === 'Teacher'){
            header("location:teacher_dashboard.php?id=".$row["id"]);
            die; 
           }
           
           if($role === 'Student'){
            header("location:student_dashboard.php?id=".$row["id"]);
            die; 
           }
           
         
       }else{
           
          echo "<div class='alert alert-danger' role='alert'>
          login failed
        </div>";
        
       }
    }else{
        $error= "incorrect username or password";   
     
       }
   }
  
    // $id = $_SESSION['id'];
   
   mysqli_close($conn);

?>