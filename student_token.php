<?php
include('connect.php');
    include('user.php');
    require_once("src/RtcTokenBuilder.php");

    $coursecode = filter_input(INPUT_GET, 'coursecode', FILTER_SANITIZE_URL);

$appID = "4f0abe39265b404da31f532980da8827";
$appCertificate = "57fc8298c5994804af3167578ba99806";
$channelName = $coursecode;
$uid =  $userID;
$uidStr = "$userID";
$role = RtcTokenBuilder::RoleAttendee;
$expireTimeInSeconds = 3600;
$currentTimestamp = (new DateTime("now", new DateTimeZone('UTC')))->getTimestamp();
$privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;

$token = RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $channelName, $uid, $role, $privilegeExpiredTs);
// echo 'Token with int uid: ' . $token . PHP_EOL;
?>