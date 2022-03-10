<?php
include('connect.php');

    if(isset($_POST['submit'])){
      
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $gender = $_POST['gender'];
        
        $pass = md5($password);
        

        //check the database to make sure a user does not already exist with the same username or email
        $user_check_query = "SELECT * FROM  users WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if($user){
            if($user['email'] === $email){
                echo "email already exists";
            }
        } 

            //add user data if there are no errors
        if(mysqli_num_rows($result) == 0){
        $sql = "INSERT INTO users (first_name, last_name, password, email,gender, role)
            VALUES ('$firstname', '$lastname', '$pass', '$email', '$gender', '$role')";
        

        if (mysqli_query($conn, $sql)){
            header("location: index.php");
                die;
        }else{
            echo "error:". $sql. "" .mysqli_error($conn);
        }

            // //read from database
            // $sql = "SELECT email FROM users WHERE email = '$email' limit 1";
        
            // $result = mysqli_query($conn, $sql);
            // $user_data = mysqli_fetch_array($result, MYSQLI_ASSOC);
            // $count = mysqli_num_rows($result);
            // mysqli_close($conn);
        
    }
    }
?>