<?php 

include('connect.php');

$id = $_SESSION['id'];


    $sql = "SELECT * FROM library WHERE userID = $id ";
    $query = mysqli_query($conn, $sql);

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $filename = $row['file_name'];
            $row_id = $row['id'];
            $filesize = $row['size (KB)'];
            
        }
       
    }else{
        echo "file does not exist";
    }
