<?php
    if(isset($_POST['folder'])){
        $course_folder = $_POST['folder'];
        
        header("location: general_library_tab.php?folder=".$course_folder);
        die;
    }
?>