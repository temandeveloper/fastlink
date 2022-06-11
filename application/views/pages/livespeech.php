<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Call V1.00</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #161c21;overflow-y: hidden">
    <nav>
        <button type="button" id="sharescreen" class="btn btn-secondary iconleft"><i class="fa fa-television" aria-hidden="true"></i></button>
    </nav>
    <section>
        <div class="header">
            <div class="input-group">
                <button type="button" id="back" class="btn btn-secondary"><i class="fa fa-angle-left" style="position: relative; top:-2px; left: -2px;" aria-hidden="true"></i></button>
                <h3 style="color:#fff ; margin-top: 10px; margin-left: 10px;">Selamat Datang</h3>
            </div>
        </div>
        <div class="container" style="margin-left: 8.5%;margin-right: 25%;">
            <div class="main-videobox">
                <div class="row" id="videostreambox">
                    <div class="col-lg">
                        <video id="localVideo" class="videobox"></video>
                    </div>
                </div>
            </div>
            <div class="bottom-nav">
                <div class="input-group justify-content-center">
                    <button type="button" id="audioact" style="margin-right: 10px;" class="btn btn-secondary"><i class="fa fa-microphone" aria-hidden="true"></i></button>
                    <button type="button" id="btncallend" style="margin-right: 10px;" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-secondary"><i class="fa fa-phone" style="transform: rotate(135deg);left: -1px;position: relative;" aria-hidden="true"></i></button>
                    <button type="button" id="camact" style="margin-right: 10px;" class="btn btn-secondary"><i class="fa fa-video-camera" aria-hidden="true"></i></button>
                </div>
            </div>
           
        </div>
    </section>
    <section class="chatbox">
        <div class="massage-section">
            <div class="content-chat">
                <div class="input-group">
                    <span class="name-chat">Ahmad Fadil</span>
                </div>
                <p class="text-chat">Selamat malam kawan</p>
                <span class="time-chat">19:00</span>
            </div>
        </div>
        <div class="input-section">
            <input type="text" class="componen-input-chat" placeholder="Type a Message" name="pesan" id="pesan">
            <button class="btn btn-primary" type="button" id="send-massage"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </div>
    </section>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Invitation Share</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="localPeerId" id="localPeerId" readonly>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Invitation Connect" aria-label="Invitation Connect" aria-describedby="button-addon2"  name="remotePeerId" id="remotePeerId">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" id="btn-call">Connect</button>
                </div>
            </div>
        </div>
      </div>
    </div>
    <style>
        .header {
            padding-top: 15px;
            height: 80px;
            margin-left: 8.5%;
            margin-right: 25%;
        }
        nav {
            padding-top: 15%;
            top: 0;
            position: fixed;
            height: 100%;
            width: 5.5%;
            background-color: #1f272f;
        }

        /*section video side*/
        .videobox {
            width:100%; 
            height:75%; 
            border-radius: 40px;
            object-fit: cover;
        }
        #audioact {
            border: none;
            border-radius: 20px;
            font-size: 27px;
            height: 70px;
            width: 70px;
            background-color: #2d3338;
        }
        #btncallend {
            border: none;
            border-radius: 20px;
            font-size: 30px;
            height: 70px;
            width: 70px;
            background-color: #0eb666;
            transform: rotate(180deg);

        }
        #camact {
            border: none;
            border-radius: 20px;
            font-size: 27px;
            height: 70px;
            width: 70px;
            background-color: #2d3338;
        }
        #sharescreen {
            border: none;
            border-radius: 20px;
            font-size: 27px;
            height: 70px;
            width: 70px;
            background-color: #161c21;
        }
        #back {
            border: none;
            border-radius: 20px;
            font-size: 38px;
            height: 60px;
            width: 60px;
            background-color: #161c21;
        }
        .iconleft {
            margin-left: 33%;
        }



        /*section chat side*/
        .chatbox {
            height: 100%;
            width: 25%;
            position: fixed;
            z-index: 1000;
            top: 0;
            right: 0;
            overflow-x: hidden;
            background-color: #1f272f;
            border-top-left-radius: 40px;
            border-bottom-left-radius: 40px;
        }
        .massage-section {
            color: #cdfff8;
            padding-top: 35px;
            padding-left: 35px;
            padding-right: 35px;
            height: 85%;
            border-bottom: 10px solid #161c21;
        }
        .time-chat {
            float: right;
        }
        .text-chat {
            margin-bottom: 0;
            margin-top: 10px;
            width: 100%;
            min-height: 60px;
            padding: 10px 10px 10px 10px;
            background-color: #161c21;
            border-bottom-left-radius: 10px;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;

        }
        .input-section {
            padding-top: 35px;
            padding-left: 35px;
            padding-right: 35px;
            height: 15%;
        }
        .componen-input-chat{
            all: unset;
            color: #cdfff8;
            width: 70%;
            background: transparent;
            border: none;
            padding: 2px 5px;
            font-size: 18px;
        }
        #send-massage {
            font-size: 20px;
            width: 90px;
            height: 40px;
            top: -3px;
            position: relative;
        }

        .bottom-nav {
            padding-right: 25%;
            padding-left: 5.5%;
            padding-top: 5px;
            height: 100px;
            width: 100%;
            position: fixed;
            z-index: 100;
            bottom: 0;
            right: 0;
            overflow-x: hidden;
        }
    </style>
    <script src="https://unpkg.com/peerjs@1.4.5/dist/peerjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        var peer = new Peer();
        let dataStream;
        const localId = document.getElementById("localPeerId");
        const remoteId = document.getElementById("remotePeerId");
        const btnCall = document.getElementById("btn-call");
        const kirimPesan = document.getElementById("send-massage");
        const pesanText = document.getElementById("pesan");
        const speechcode = document.getElementById("speechcode");
        let usersconnect = [];
        let statuscon = "";

        //========================= CODE VOICE RECOGNITION ===================//

        // window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        // const recognition = new SpeechRecognition();
        // recognition.lang = "ja";
        // recognition.interimResults = true;
        // recognition.addEventListener("result", (e) => {
        //     const text = Array.from(e.results).map((result) => result[0]).map((result) => result.transcript).join("");
        //     console.log("Recognition Processing");
        //     console.log("Fadil : "+text);
        //     if (e.results[0].isFinal) {
        //         console.log(text);
        //         console.log(usersconnect);
        //         usersconnect.forEach(function(item, index){
        //             var conn = peer.connect(item);
        //             // Send messages
        //             console.log('try to send massage');
        //             conn.on('open', function() {
        //                 // Send messages
        //                 conn.send(item+" : "+text);
        //             });
        //         });
        //     }
        // });

        // recognition.addEventListener("end", () => {
        //     recognition.start();
        // });
        // recognition.start();


        //========================== Code screen capture =====================//



        $("#sharescreen").click(function(){
            const remotePeerId = remoteId.value;
            if(remotePeerId == ""){
                alert("Silahkan masukkan invitation id terlebih dahulu");
            }else{
                var displayMediaOptions = {
                    video: {
                        cursor: "always"
                    },
                    audio: false
                };
                navigator.mediaDevices.getDisplayMedia(displayMediaOptions)
                .then(function (stream) {

                    stream.getVideoTracks()[0].addEventListener('ended', () => {
                        //perform your task here
                        console.log("stop share");
                        $("#localscreen").parent().remove();
                    });

                    // dataStream = stream;
                    if(($(".videobox").length % 3) === 0){
                        $("#videostreambox").append("<div class='w-100'></div>");
                    }
                    $("#videostreambox").append("<div class='col-lg'><video id='localscreen' class='videobox'></video></div>");
                    const localVideoStream = document.getElementById("localscreen");
                    localVideoStream.srcObject = stream;
                    localVideoStream.onloadedmetadata = () => localVideoStream.play();
                    console.log("send share screen");

                    const call = peer.call(remotePeerId, stream);

                    // var idelm = remotePeerId+"-remoteid";
                    // statuscon = "client"; //penanda kalo dia client
                    call.on("stream", stream => {
                        console.log("share screen is generate");
                        //break row
                        // if(($(".videobox").length % 3) === 0){
                        //     $("#videostreambox").append("<div class='w-100'></div>");
                        // }
                        // $("#videostreambox").append("<div class='col-lg'><video id='"+idelm+"' class='videobox' ></video></div>");
                        // const remoteVideo = document.getElementById(idelm);
                        // remoteVideo.srcObject = stream;
                        // remoteVideo.onloadedmetadata = () => remoteVideo.play();
                    });
                });
            }
            
        });


        //========================== CODE STREAM =============================//

        navigator.mediaDevices.getUserMedia({audio: true, video: true}).then( stream => {
            dataStream = stream;
            const localVideoStream = document.getElementById("localVideo");
            localVideoStream.srcObject = stream;
            localVideoStream.onloadedmetadata = () => localVideoStream.play();

            $("#camact").click(function(){
                // console.log(stream.getVideoTracks()[0].enabled);
                stream.getVideoTracks()[0].enabled = !stream.getVideoTracks()[0].enabled;
            });

             $("#audioact").click(function(){
                // console.log(stream.getVideoTracks()[0].enabled);
                stream.getAudioTracks()[0].enabled = !stream.getAudioTracks()[0].enabled;
            });

        });

        //this code is similarity of document ready on javascript
        peer.on("open", id => {
            localId.value = id;
        });


        btnCall.addEventListener("click", function(){
            const remotePeerId = remoteId.value;
            if(remotePeerId == ""){
                alert("Silahkan masukkan invitation id terlebih dahulu");
            }else{
                // usersconnect.push(remotePeerId);
                const call = peer.call(remotePeerId, dataStream);
                var idelm = remotePeerId+"-remoteid";
                statuscon = "client"; //penanda kalo dia client
                call.on("stream", stream => {
                    console.log("generate element caller1");
                    //break row
                    if(($(".videobox").length % 3) === 0){
                        $("#videostreambox").append("<div class='w-100'></div>");
                    }
                    $("#videostreambox").append("<div class='col-lg'><video id='"+idelm+"' class='videobox' ></video></div>");
                    const remoteVideo = document.getElementById(idelm);
                    remoteVideo.srcObject = stream;
                    remoteVideo.onloadedmetadata = () => remoteVideo.play();
                });
            }
           
        });


        peer.on("call", call => {
            let idpemanggil = call.peer;
            console.log("insert id : "+idpemanggil);
            var idelm = idpemanggil+"-remoteid";
            console.log("caller :",call.peer);
            call.answer(dataStream);
            call.on("stream", stream => {
                console.log("generate element caller2");
                //break row
                if(($(".videobox").length % 3) === 0){
                    $("#videostreambox").append("<div class='w-100'></div>");
                }
                $("#videostreambox").append("<div class='col-lg'><video id='"+idelm+"' class='videobox' ></video></div>");
                const remoteVideo = document.getElementById(idelm);
                remoteVideo.srcObject = stream;
                remoteVideo.onloadedmetadata = () => remoteVideo.play();
            })

            if(statuscon != "client"){
                if(usersconnect.length !== 0){
                    console.log('broadcast all user connect :'+usersconnect.length);
                    console.log(usersconnect);
                    usersconnect.forEach(function(item, index){
                        var conn = peer.connect(item);
                        conn.on('open', function() {
                            // Send messages
                            conn.send({
                                status: 'broadcast',
                                userid: idpemanggil,
                            });
                        });
                    });

                    console.log('send all users connect to new user connect');
                    var conn = peer.connect(idpemanggil);
                    conn.on('open', function() {
                        // Send messages
                        conn.send({
                            status: 'alluserconnect',
                            userid: usersconnect,
                        });
                    });

                    usersconnect.push(idpemanggil);
                }else{
                    usersconnect.push(idpemanggil);
                }
            }
        });

        //========================== CODE CHAT =============================//

        kirimPesan.addEventListener("click", function(){
            console.log(usersconnect);
            usersconnect.forEach(function(item, index){
                var conn = peer.connect(item);
                const massage = pesanText.value;
                // Send messages
                console.log('try to send massage');
                conn.on('open', function() {
                    // Send messages
                    conn.send(massage);
                });
            });
        })

        //kode untuk menerima pesan
        peer.on('connection', function(con){
            console.log("this connection ",con);
            con.on('data', function(data){
                console.log('Incoming data is :');
                console.log(data);

                if(data.status == "broadcast"){
                    usersconnect.push(data.userid);
                    console.log('user incomming : '+data.userid);
                }else if (data.status == "alluserconnect"){
                    usersconnect = data.userid;
                    console.log("generate all new user :"+usersconnect.length);
                    console.log(usersconnect);
                    usersconnect.forEach(function(item, index){
                        if(localId.value != item){
                            const call = peer.call(item, dataStream);
                            var idelm = item+"-remoteid";
                            call.on("stream", stream => {
                                console.log("generate element :");
                                //break row
                                if(($(".videobox").length % 3) === 0){
                                    $("#videostreambox").append("<div class='w-100'></div>");
                                }
                                $("#videostreambox").append("<div class='col-lg'><video id='"+idelm+"' class='videobox'></video></div>");
                                const remoteVideo = document.getElementById(idelm);
                                remoteVideo.srcObject = stream;
                                remoteVideo.onloadedmetadata = () => remoteVideo.play();
                            });
                        }
                    });
                }
            });
        });


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>