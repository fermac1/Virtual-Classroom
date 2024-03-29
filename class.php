<?php 
    include('connect.php');
    include('session.php');
    include('user.php');
    include("teacher_token.php");
    include("screen_share_token.php");

    if(isset($_SESSION['course_code'])){
        if(isset($_POST['json'])){
        $student_id = $_POST['json'];
    
        $coursecode = $_SESSION['course_code'];
        $time = date("h:i:sa");
        $date = date("Y/m/d");
       
        $check = mysqli_query($conn, "SELECT * FROM attendance WHERE course_code = '$coursecode' AND student_id = '$student_id'");
        if(mysqli_num_rows($check) > 0){
            //update if class data exist
            $update = mysqli_query($conn, "UPDATE attendance SET time = '$time' WHERE course_code = '$coursecode' AND student_id = '$student_id'");
            echo $student_id;
            
        }else{
            $sql = mysqli_query($conn, "INSERT INTO `attendance` (`course_code`, `student_id`, `date`, `time`)
            VALUES ('$coursecode', '$student_id', '$date', '$time')");
        }
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
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
 
    <div id="stream-wrapper">
        <div id="video-streams">
        </div>
        <div id="msg">flash message</div>
        <div id="stream-controls">
            <button title="Leave Stream"><i class="bx bx-log-out" id="leave-btn"></i> </button>
            <button title="Mic Off"><i class='bx bx-microphone' id="mic-btn"></i></button>
            <button title="Camera Off"><i class='bx bx-video' id="camera-btn"></i></button>
            <button name="attendance" title="Attendance"><i class='bx bx-user-check' id="attendance"></i></button>   
            <button title="Share screen"><i class='bx bx-share-alt' id="share"></i></button>   
        </div>
    </div>
    
</body>

<script src="src/AgoraRTC_N-4.7.3.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script>
    'use strict'
    const client = AgoraRTC.createClient({mode:'rtc', codec:'vp8'})
let localTracks = []
let remoteUsers = {}
let localScreenTrack = []


let joinAndDisplayLocalStream = async () => {
    client.on('user-published', handleUserJoined)

    client.on('stream-added', handlePeerJoined)
    
    client.on('user-left', handleUserLeft)


    let UID = await client.join('<?php echo $appID; ?>' , '<?php echo $channelName; ?>', '<?php echo $token;?>', <?php echo $uid;?>)    

    localTracks = await AgoraRTC.createMicrophoneAndCameraTracks() 
    

    let player = `<div class="video-container" id="user-container-${UID}">
                        <div class="video-player" id="user-${UID}"></div>
                </div>`
    document.getElementById('video-streams').insertAdjacentHTML('afterbegin', player)

    localTracks[1].play(`user-${UID}`)
    
    await client.publish([localTracks[0], localTracks[1]])
}

let joinStream = async () => {
    await joinAndDisplayLocalStream()

    document.getElementById('stream-controls').style.display = 'flex'
}

let handlePeerJoined = async (user) => {
    console.log("it came here")
    console.log(user)
}


// function asyncAjax(user){
//     console.log("This is the async Ajax")
//     return new Promise(function(resolve, reject) {
//             $.ajax({
//                 type: "POST",
//         data: {remote_user: user},
//         url: '',
//                 success: function(data) {
//                     console.log({'check automatic json': data})
//                     resolve(data) // Resolve promise and when success
                    
//                 },
//                 error: function(err) {
//                     reject(err) // Reject the promise and go to catch()
//                 }
//             });
//     });
// }

function showUser(uid, fullname) {
    // let fullname 
  if (uid == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //   console.log(this.responseText)
        fullname = this.responseText
        // console.log(fullname)
        // document.getElementById("txtHint").innerHTML = this.responseText;
      }
      return fullname
    };
    xmlhttp.open("GET","getuser.php?q="+uid,true);
    xmlhttp.send();

    
  }
  
}

//another user joining
let handleUserJoined = async (user, mediaType) => {
    let fullname 
    remoteUsers[user.uid] = user;

    console.log({"uid": user.uid})


    console.log({"User Joined": remoteUsers})

    let json = Object.keys(remoteUsers)[0];
    let remote_user = user.uid;

    
    // const result = showUser(json, fullname)

    // console.log(result)

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //   console.log(this.responseText)
        fullname = this.responseText
        
        let flashMessage = fullname +' '+'joined'
        console.log(flashMessage)

        $("#msg").html(flashMessage).fadeIn(function() {
    setTimeout(function() {
        $("#msg").html(flashMessage).fadeOut();
    }, 5000);
});
        // document.getElementById("txtHint").innerHTML = this.responseText;
      }
      
    };
    xmlhttp.open("GET","getuser.php?q="+json,true);
    xmlhttp.send();

    // console.log({fullname})
    let add = '<?php echo $uid; ?>'
    const last1 = add.slice(-1); 
    console.log(last1);

    const last = json.slice(-1); 
    // console.log(last);
    console.log({'check json':last})

    console.log(json)
    
    $("#attendance").click(function(){
    $.ajax({
    type: "POST",
    data: {json: json},
    url: '',
    success: function (result) {
        $("#result").html(result);
        console.log(result)
        document.getElementById('attendance').style.color = '#0a3c49'
        document.getElementById('attendance').classList.add('bx-user-check')
        document.getElementById('attendance').classList.remove('bx-user')
        
        $("#msg").html('Attendance taken successfully').fadeIn(function() {
    setTimeout(function() {
        $("#msg").html('Attendance taken successfully').fadeOut();
    }, 5000);
});

    }
    })

    });


    await client.subscribe(user, mediaType);

    if (mediaType === 'video'){
        let player = document.getElementById(`user-container-${user.uid}`)
        if (player != null){
            player.remove()
        }


        // player = `<div class="video-container" id="user-container-${user.uid}">
        //                 <div class="video-player" id="user-${user.uid}"></div> 
        //         </div>`
        // document.getElementById('video-streams').insertAdjacentHTML('beforeend', player)

        user.videoTrack.play(`user-${user.uid}`)
    }

    if (mediaType === 'audio'){
        user.audioTrack.play()
    }

}



//share screen
// async function startScreenCall() {
//     const screenClient = AgoraRTC.createClient({ mode: "rtc", codec: "vp8" , role: 'host'});
//     await screenClient.join()
    
  
//     const screenTrack = await AgoraRTC.createScreenVideoTrack();
//     screenTrack[1].play(`user-${UID}`)
//     await screenClient.publish(screenTrack);
  
//     return screenClient;
//   }

let share = async (user) => { 

     

    // let player = `<div class="video-container" id="user-container-${UID}">
    //                     <div class="video-player" id="user-${UID}"></div>
    //             </div>`
    // document.getElementById('video-streams').insertAdjacentHTML('afterbegin', player)

    AgoraRTC.createScreenVideoTrack({
    // Set the encoder configurations. For details, see the API description.
    encoderConfig: "1080p_1",
    // Set the video transmission optimization mode as prioritizing video quality.
    optimizationMode: "detail",
}).then(localScreenTrack => {
  /** ... **/
//   localScreenTrack[1].play(`user-${UID}`)
  console.log("Started sharing")

})};


// when user leaves stream
let handleUserLeft = async (user) => {
    remoteUsers[user.uid] = user
    let json = Object.keys(remoteUsers)[0];
    delete remoteUsers[user.uid]
    console.log('deleye', json);
    // document.getElementById(`user-container-${user.uid}`).remove()

       
    //flash message
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        fullname = this.responseText

    let flashMessage = fullname +' '+'left'

    $("#msg").html(flashMessage).fadeIn(function() {
    setTimeout(function() {
        $("#msg").html(flashMessage).fadeOut();
        }, 5000);
        });
    }

    };
    xmlhttp.open("GET","student-getuser.php?q="+json,true);
    xmlhttp.send();
    //end flash message
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
        $("#mic-btn").prop("title", "Mic Off")
        e.target.classList.add('bx-microphone')
        e.target.classList.remove('bx-microphone-off')
        e.target.style.color = '#ffffff'
    }else{
        await localTracks[0].setMuted(true)
        $("#mic-btn").prop("title", "Mic On")
        e.target.classList.add('bx-microphone-off')
        e.target.classList.remove('bx-microphone')
        e.target.style.color = '#0a3c49'
    }
}

let toggleCamera = async (e) => {
    if(localTracks[1].muted){
        await localTracks[1].setMuted(false)
        e.target.classList.add('bx-video')
        e.target.classList.remove('bx-video-off')
        $("#camera-btn").prop("title", "Camera Off")
        e.target.style.color = '#ffffff'
    }else{
        await localTracks[1].setMuted(true)
        e.target.classList.add('bx-video-off')
        e.target.classList.remove('bx-video')
        $("#camera-btn").prop("title", "Camera On")
        e.target.style.color = '#0a3c49'
    }
}

function toggleScreenShareBtn() {
  $('#share').toggleClass('btn-danger');
  $('#share').toggleClass('fa-share-square').toggleClass('fa-times-circle');
}

    document.getElementById('leave-btn').addEventListener('click', leaveAndRemoveLocalStream)
    document.getElementById('mic-btn').addEventListener('click', toggleMic)
    document.getElementById('camera-btn').addEventListener('click', toggleCamera)
    document.getElementById('share').addEventListener('click', share)

    joinStream()
</script>
