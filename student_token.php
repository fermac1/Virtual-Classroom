<?php
    include('connect.php');
    // include('user.php');
    require_once("src/RtcTokenBuilder.php");

    $student = 0;
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



    $query = mysqli_query($conn, "SELECT * FROM course_registration WHERE course_code = '$coursecode' AND userID = '$id'") ;

    if(mysqli_num_rows($query) > 0){

        while($row = mysqli_fetch_assoc($query)){
            $student_id = $row['userID'];
        }
        $appID = "4f0abe39265b404da31f532980da8827";
        $appCertificate = "57fc8298c5994804af3167578ba99806";
        $remote_channelName = $coursecode;
        $remote_uid =  $student_id.$student;
        $uidStr = "$student_id";
        $role = RtcTokenBuilder::RoleAttendee;
        $dbRole = $student_id.$db_role;
        $expireTimeInSeconds = 3600;
        $currentTimestamp = (new DateTime("now", new DateTimeZone('UTC')))->getTimestamp();
        $privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;

        $remote_token = RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $remote_channelName, $remote_uid, $role, $privilegeExpiredTs);
        // echo 'Token with int uid: ' . $token . PHP_EOL;
    }else{
        echo 'course has not been registered yet';
    }

}else{
    echo "user does not exist";
}
?>