<?php
include('session.php');
include('library.php');
if(isset($_POST['open'])){
    $getfile = $_POST['file'];
    // echo $getfile;
    // $fileContent = file_get_contents($_FILES["file"]["tmp_name"]);
    //  add header to load file
    header('Content-type:application/pdf');
    header('Content-Disposition:inline;filename='.$getfile);
    header('Content-Transfer-Encoding:binary');
    header('Accept-Ranges: bytes');
    @readfile($getfile);
}


?>