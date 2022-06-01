<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar WebRTC</title>
</head>
<body>
    <input type="text" name="localPeerId" id="localPeerId" readonly>
    <input type="text" name="remotePeerId" id="remotePeerId">
    <button id="btn-call">Call</button>
    <video id="localVideo"></video>
    <video id="remoteVideo"></video>
    <script src="https://unpkg.com/peerjs@1.4.5/dist/peerjs.min.js"></script>
    <script>
        var peer = new Peer();
        let dataStream;
        const localId = document.getElementById("localPeerId");
        const remoteId = document.getElementById("remotePeerId");
        const btnCall = document.getElementById("btn-call");

        navigator.mediaDevices.getUserMedia({video : true}).then( stream => {
            dataStream = stream;
            const localVideoStream = document.getElementById("localVideo");
            localVideoStream.srcObject = dataStream;
            localVideoStream.onloadedmetadata = () => localVideoStream.play();
        });

        peer.on("open", id => {
            localId.value = id;
        });


        btnCall.addEventListener("click", function(){
            const remotePeerId = remoteId.value;
            const call = peer.call(remotePeerId, dataStream);

            call.on("stream", stream => {
                const remoteVideo = document.getElementById("remoteVideo");
                remoteVideo.srcObject = stream;
                remoteVideo.onloadedmetadata = () => remoteVideo.play();
            });
        });

        peer.on("call", call => {
            call.answer(dataStream);
            call.on("stream", stream => {
                const remoteVideo = document.getElementById("remoteVideo");
                remoteVideo.srcObject = stream;
                remoteVideo.onloadedmetadata = () => remoteVideo.play();
            })
        })

    </script>
</body>
</html>