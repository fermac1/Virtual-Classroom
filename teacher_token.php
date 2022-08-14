<?php
    include('connect.php');
    // include('user.php');
    require_once("src/RtcTokenBuilder.php");

    $teacher = 1;
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
           $db_role = $row['role'];
        }

    $coursecode = filter_input(INPUT_GET, 'coursecode', FILTER_SANITIZE_URL);

    $query = mysqli_query($conn, "SELECT * FROM courses WHERE course_code = '$coursecode'") ;

    if(mysqli_num_rows($query) > 0){
     
        while($row= mysqli_fetch_assoc($query)){
            $_SESSION['course_code'] = $row['course_code'];
            
        }
        $appID = "4f0abe39265b404da31f532980da8827";
        $appCertificate = "57fc8298c5994804af3167578ba99806";
        $channelName = $coursecode;
        $uid =  $userID.$teacher;
        $uidStr = "$userID";
        $role = RtcTokenBuilder::RolePublisher;
        $dbRole = $userID.$db_role;
        $expireTimeInSeconds = 3600;
        $currentTimestamp = (new DateTime("now", new DateTimeZone('UTC')))->getTimestamp();
        $privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;

        $token = RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $channelName, $uid, $role, $privilegeExpiredTs);
     
        // echo 'Token with int uid: ' . $token . PHP_EOL;
    
    }

}else{
    echo "user does not exist";
}
?>