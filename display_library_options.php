<?php
include('connect.php');
// include('session.php');
$id = $_SESSION['id'];
echo'ffff';
if(isset($_POST['delete-modal'])){
    $getFile = $_POST['file'];
  
echo $getFile;
    // $query = mysqli_query($conn, "SELECT * FROM library WHERE userID = '$id' ");
    // if($query){
    //     while($rows = mysqli_fetch_assoc($query)){
    //         $id = $row['id'];
    //         $file = $row['file_name'];
    //     }
    // }
}
 ?>