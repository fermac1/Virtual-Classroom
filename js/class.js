/** 
 * @name handleFail
 * @param err - error thrown by any function
 * @description Helper function to handle errors
 */
 let handleFail = function(err){
    console.log("Error : ", err);
};

// Queries the container in which the remote feeds belong
let remoteContainer= document.getElementById("remote-container");

/**
 * @name addVideoStream
 * @param streamId
 * @description Helper function to add the video stream to "remote-container"
 */
function addVideoStream(streamId){
    let streamDiv=document.createElement("div"); // Create a new div for every stream
    streamDiv.id=streamId;                       // Assigning id to div
    streamDiv.style.transform="rotateY(180deg)"; // Takes care of lateral inversion (mirror image)
    remoteContainer.appendChild(streamDiv);      // Add new div to container
}
/**
 * @name removeVideoStream
 * @param evt - Remove event
 * @description Helper function to remove the video stream from "remote-container"
 */
function removeVideoStream(streamId){
    let remDiv = document.getElementById(streamId);
    if(remDiv) bremDiv.parentNode.removeChild(remDiv);
}


let client = AgoraRTC.createClient({ 
    mode: 'rtc', 
    codec: 'vp8'
 });
  
 client.init('f00eda7e6e91423295f0bd1d2961e5e2');

 client.join(null, "any-channel", null, (uid)=>{
    // publish the video
    let localStream = AgoraRTC.createStream({
        video: true,
        audio: true,
    });

    localStream.init(() =>{
        localStream.play('me');
        client.publish(localStream, handleFail);
    }, handleFail);
}, handleFail);

//When a stream is added to a channel
client.on('stream-added', function (evt) {
    client.subscribe(evt.stream, handleFail);
});

//When you subscribe to a stream
client.on('stream-subscribed', function (evt) {
    let stream = evt.stream;
    let streamId = String(stream.getId());
    addVideoStream(streamId);
    stream.play(streamId);
})

//When a person is removed from the stream
client.on('stream-removed', function(evt){
    let stream = evt.stream;
    let streamId = String(stream.getId());
    stream.close();
    removeVideoStream(streamId);
});

client.on('peer-leave', function(evt){
    let stream = evt.stream;
    let streamId = String(stream.getId());
    stream.close();
    removeVideoStream(streamId);
});
