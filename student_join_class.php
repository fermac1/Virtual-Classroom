<?php 
    include('connect.php');
    include('session.php');
    include('user.php');
    include("student_token.php");

    if(isset($_POST['json'])){
        $remote_user = $_POST['json'];

        $check = mysqli_query($conn, "SELECT * FROM users WHERE id = '$remote_user' ");
        if(mysqli_num_rows($check) > 0){
            while($data = mysqli_fetch_assoc($check)){
                $remote_user_role = $data['role'];
                $remote_user_id = $data['id'];

                $sql = mysqli_query($conn, "INSERT INTO `test` (`remote_id`, `role`)
                VALUES ('$remote_user_id', '$remote_user_role')");

            }
        }else{
            echo 'error';
        }
    }
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Class</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css?v=<?php echo time(); ?>'>
</head>
<body>

    <div id="stream-wrapper">
        <div id="video-streams">
            <div id="student-area"></div>
        </div>

        <div id="stream-controls">
            <button id="leave-btn">Leave Stream</button>
            <button id="mic-btn">Mic On</button>
            <button id="camera-btn">Camera on</button>
            <button id="get-user-btn" name="get-user-btn">Get user</button>
        </div>
    </div>
    
</body>

<script src="src/AgoraRTC_N-4.7.3.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<script>
    const client = AgoraRTC.createClient({mode:'rtc', codec:'vp8'})

let localTracks = []
let remoteUsers = {}



let joinAndDisplayLocalStream = async () => {
    client.on('user-published', handleUserJoined)
    
    client.on('user-left', handleUserLeft)

//     client.setClientRole("audience", function(e) {
//   if (!e) {
//     console.log("setAudience success");
//   } else {
//     console.log("setAudience error", e);
//   }
// });
    
    let UID = await client.join('<?php echo $appID; ?>' , '<?php echo $remote_channelName; ?>', '<?php echo $remote_token;?>', <?php echo $remote_uid;?>, <?php echo $role; ?>)
    console.log({"UID": UID})

    localTracks = await AgoraRTC.createMicrophoneAndCameraTracks() 

    let role = '<?php echo $role; ?>'
    // options.role = "audience";
    
    let player = `<div class="student-container" id="user-container-${UID}">
                        <div class="video-player" id="user-${UID}"></div>
                </div>`
    document.getElementById('student-area').insertAdjacentHTML('beforeend', player)
     

    localTracks[1].play(`user-${UID}`)
    
    await client.publish([localTracks[0], localTracks[1]])
}

let joinStream = async () => {
    
    await joinAndDisplayLocalStream()
   
    document.getElementById('stream-controls').style.display = 'flex'
    
}

//another user joining
let handleUserJoined = async (user, mediaType) => {

    remoteUsers[user.uid] = user 

    console.log({"studentuid": user.uid})
   
  
    let json = Object.keys(remoteUsers)[0];

    const last = json.slice(-1); 
 
    console.log({'check json last':last})

    console.log({'check json':json})

    // $("#get").click(function(){
        $.ajax({
            type: "POST",
            data: {json: json},
            url: '',
            success: function(result){
                $("#result").html(result);
                console.log({'check json':json})
                console.log('yesssssss')
            }
        })
    // });

    $(document).ready(function(){

    setTimeout(function(){

        $("#get-user-btn").click();


    },1);

    });
    

    console.log({"User Joined": remoteUsers})
    await client.subscribe(user, mediaType)

    if (mediaType === 'video'){
        let player = document.getElementById(`user-container-${user.uid}`)
        if (player != null){
            player.remove()
        }

        let role = '<?php echo $role; ?>'

        console.log({"role": role})
        if(last === '1'){
        player = `<div class="video-container" id="user-container-${user.uid}">
                        <div class="video-player" id="user-${user.uid}"></div> 
                </div>`
        document.getElementById('video-streams').insertAdjacentHTML('beforebegin', player)
        }else{
            player = `<div class="student-container" id="user-container-${user.uid}">
                        <div class="video-player" id="user-${user.uid}"></div> 
                </div>`
        document.getElementById('student-area').insertAdjacentHTML('beforeend', player)

        }

     
        user.videoTrack.play(`user-${user.uid}`)
    }

    if (mediaType === 'audio'){
        user.audioTrack.play()
    }
}

// when user leaves stream
let handleUserLeft = async (user) => {
    delete remoteUsers[user.uid]
    document.getElementById(`user-container-${user.uid}`).remove()
}

let leaveAndRemoveLocalStream = async () => {
    for(let i = 0; localTracks.length > i; i++){
        localTracks[i].stop()
        localTracks[i].close()
    }

    await client.leave()
    document.getElementById('stream-controls').style.display = 'none'
    document.getElementById('video-streams').innerHTML = ''
    history.go(-1)
}

let toggleMic = async (e) => {
    if (localTracks[0].muted){
        await localTracks[0].setMuted(false)
        e.target.innerText = 'Mic on'
        e.target.style.backgroundColor = 'cadetblue'
    }else{
        await localTracks[0].setMuted(true)
        e.target.innerText = 'Mic off'
        e.target.style.backgroundColor = '#0a3c49'
    }
}

let toggleCamera = async (e) => {
    if(localTracks[1].muted){
        await localTracks[1].setMuted(false)
        e.target.innerText = 'Camera on'
        e.target.style.backgroundColor = 'cadetblue'
    }else{
        await localTracks[1].setMuted(true)
        e.target.innerText = 'Camera off'
        e.target.style.backgroundColor = '#0a3c49'
    }
}

document.getElementById('leave-btn').addEventListener('click', leaveAndRemoveLocalStream)
document.getElementById('mic-btn').addEventListener('click', toggleMic)
document.getElementById('camera-btn').addEventListener('click', toggleCamera)
joinStream()

</script>
