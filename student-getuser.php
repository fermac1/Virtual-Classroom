<?php 
    include('connect.php');
    include('session.php');
    include('user.php');
    include("student_token.php");
    
    $q=$_GET["q"];

    $user = mysqli_query($conn, "SELECT * FROM users WHERE id= '$q'");
        if(mysqli_num_rows($user) > 0){

            while($row = mysqli_fetch_assoc($user)){
                $remote_firstname = $row['first_name'];
                $remote_lastname = $row['last_name'];
                
                $fullname = $remote_firstname.' '.$remote_lastname;
                echo $fullname;
                
            }
        }

?>