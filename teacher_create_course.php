<?php
$sql = "SELECT * FROM users WHERE id=".$id;
        $result = $conn->query($sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {   
               $firstname = $row["first_name"];
               $lastname =$row["last_name"];
               $email = $row["email"];
               $image = $row["image"];
               $userID =$row['id'];
            }
?>
<?php 
            include('create_course.php');
        }else{
            echo "user does not exist";
        }
?>