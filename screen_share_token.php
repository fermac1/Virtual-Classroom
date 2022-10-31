<?php
    include('connect.php');
    // include('user.php');
    require_once("src/RtcTokenBuilder.php");

    $random_num = rand();
    $db_role = 1;
    
        $appID = "4f0abe39265b404da31f532980da8827";
        $appCertificate = "57fc8298c5994804af3167578ba99806";
        $share_channelName = 'screenshare';
        $share_uid =  $random_num;
        $uidStr = "$random_num";
        $role = RtcTokenBuilder::RoleAttendee;
        $dbRole = $random_num.$db_role;
        $expireTimeInSeconds = 3600;
        $currentTimestamp = (new DateTime("now", new DateTimeZone('UTC')))->getTimestamp();
        $privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;

        $share_token = RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $share_channelName, $share_uid, $role, $privilegeExpiredTs);
        // echo 'Token with int uid: ' . $token . PHP_EOL;

?>