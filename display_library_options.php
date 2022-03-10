
<?php
include('connect.php');
include('session.php');
$id = $_SESSION['id'];

// if(isset($_POST['delete-modal'])){
    // $getFile = $_POST['file'];
    // echo $row['file_name'];

if(isset($_POST['deletefile'])){
    $getFile = $_POST['file'];
    echo 'ggg';
    echo $getFile;
// }
}
 ?>