<a href="general-library">
    <img src="images/folder-svgrepo-com.svg" alt="folder" width="5%">
</a>

<?php
$folder='';
    $path = "general-library/";
    // $contents = scandir($path);
    // print_r($contents);
    $dirname= "PRE100";
    $filename = "general-library/" . $dirname . "/";
    if (file_exists($filename)) {
    if($fh = opendir($path)){
        while(($entry = readdir($fh)) !== false){
            ?>
        <form action="personal_library_tab.php" method="post">
        <input type="submit" name="folder" value="<?php echo $entry;?>" readonly>
        </form>
            
            <?php
            
            if(isset($_POST['folder'])){
                $folder = "general-library/".$_POST['folder'];
                // $handle = opendir($folder);
                // while(($list = readdir($handle)) !== false){
                //     $folder_content ='<p>'.$list.'</p>';
                //     echo $folder_content;
                // }
                
            }
        }
    }
}
$crumbs = explode("/",$_SERVER["REQUEST_URI"]);
echo $_SERVER['PHP_SELF'];
foreach($crumbs as $crumb){
    echo ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ');
}
?>