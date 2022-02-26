<?php
    // session_start();
    include ('connect.php');
    include('session.php');

    $firstname = ''; $lastname=''; $email = ''; $image ='';  $default_image ='';
    $id = $_SESSION['id'];
    

    // if (!empty($_GET['id'])) {
    // // include ('connect.php');
    //     # code...
    //     $_SESSION['id'] = $id;
    //     echo $id;
    
    $sql = "SELECT * FROM users WHERE id=".$id;
    $result = $conn->query($sql);
    $default_image = "<img src= 'images/camera.png' width='100%'/>";
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {   
           $firstname = $row["first_name"];
           $lastname =$row["last_name"];
           $email = $row["email"];
           $image = $row["image"];
        //    echo $image;
    //     }
    // } else {
    //     echo "0 results";
    // }

    // }

    //photo upload
    if(isset($_POST['submit'])){
        
        if($_FILES['input_image']['name'] != ''){

        $filename = $_FILES['input_image']['name'];
        $target_file = $_FILES['input_image']['tmp_name'];
        $uploadOk = 1;
        $filepath = "profile-photo/" . $filename;
        $imageFileType =strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // echo 'Target File  = '. $target_file;
        // echo '<br />';
        // echo 'File name = '. $filename;
        // echo '<br />';
        // echo 'File path = '. $filepath;

        //get the submitted data
        $sql = "UPDATE users SET image='$filepath' WHERE id = '$id'" ;
        //execute query
        mysqli_query($conn, $sql);

            //check file size
            if($_FILES['input_image']['size'] > 5000000){
                    echo "Sorry your file is too large.";
                    $uploadOk = 0;
                }
                    
                if(move_uploaded_file( $target_file, $filepath))
                {
                    // echo <"<img src=".$filepath." width=150 />";
                    echo 'uploaded successfully';
                }
                else {
                    echo "Error!!";
                }
        }else{
        echo "no photo";
        }
        }else{
            // echo"<img src= 'images/camera.png' width='100%'/>";
        }
     
    }
}
    
?>