<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Call V0.2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

    <div class="container" style="margin-top: 30px;margin-bottom: 30px;">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Invitation Share</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="localPeerId" id="localPeerId" readonly>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Languange Code You Can Speech</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="speechcode" id="speechcode">
        </div>
        
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Invitation Connect" aria-label="Invitation Connect" aria-describedby="button-addon2"  name="remotePeerId" id="remotePeerId">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="btn-call">Connect</button>
            </div>
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Message" aria-label="Message" aria-describedby="button-addon2" name="pesan" id="pesan">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="send-massage">Send</button>
            </div>
        </div>

        <div class="row" id="videostreambox">
            <div class="col-lg">
                <video id="localVideo" width="100%"></video>
            </div>
        </div>
        <div class="texts">
        </div>
    </div>
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
        const texts = document.querySelector(".texts");
        let usersconnect = [];

        //========================= CODE VOICE RECOGNITION ===================//

        window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        const recognition = new SpeechRecognition();
        recognition.lang = "id";
        recognition.interimResults = true;
        recognition.addEventListener("result", (e) => {
            const text = Array.from(e.results).map((result) => result[0]).map((result) => result.transcript).join("");
            console.log("Recognition Processing");
            console.log("Fadil : "+text);
            if (e.results[0].isFinal) {
                console.log(text);
                console.log(usersconnect);
                usersconnect.forEach(function(item, index){
                    var conn = peer.connect(item);
                    // Send messages
                    console.log('try to send massage');
                    conn.on('open', function() {
                        // Send messages
                        conn.send(item+" : "+text);
                    });
                });
            }
        });

        recognition.addEventListener("end", () => {
            recognition.start();
        });
        recognition.start();


        //========================== CODE STREAM =============================//

        navigator.mediaDevices.getUserMedia({video : true}).then( stream => {
            dataStream = stream;
            const localVideoStream = document.getElementById("localVideo");
            localVideoStream.srcObject = dataStream;
            localVideoStream.onloadedmetadata = () => localVideoStream.play();
        });

        //this code is similarity of document ready on javascript
        peer.on("open", id => {
            localId.value = id;
        });


        btnCall.addEventListener("click", function(){
            const remotePeerId = remoteId.value;
            usersconnect.push(remotePeerId);
            const call = peer.call(remotePeerId, dataStream);
            var idelm = remotePeerId+"-remoteid";
            call.on("stream", stream => {
                console.log("generate element caller1");
                $("#videostreambox").append("<div class='col-lg'><video id='"+idelm+"' width='100%'></video></div>");
                const remoteVideo = document.getElementById(idelm);
                remoteVideo.srcObject = stream;
                remoteVideo.onloadedmetadata = () => remoteVideo.play();
            });
        });


        peer.on("call", call => {
            let idpemanggil = call.peer;
            console.log("insert id : "+idpemanggil);
            usersconnect.push(idpemanggil);
            var idelm = idpemanggil+"-remoteid";
            console.log("caller :",call.peer);
            call.answer(dataStream);
            call.on("stream", stream => {
                console.log("generate element caller2");
                $("#videostreambox").append("<div class='col-lg'><video id='"+idelm+"' width='100%'></video></div>");
                const remoteVideo = document.getElementById(idelm);
                remoteVideo.srcObject = stream;
                remoteVideo.onloadedmetadata = () => remoteVideo.play();
            })
        });

        //========================== CODE CHAT =============================//

        kirimPesan.addEventListener("click", function(){
            console.log(usersconnect);
            usersconnect.forEach(function(item, index){
                var conn = peer.connect(item);
                const massage = pesanText.value;
                // Send messages
                conn.send('this massage is Hello!');
                console.log('try to send massage');
                conn.on('open', function() {
                    // Send messages
                    conn.send(massage);
                });
            });
        })

        //kode untuk menerima pesan
        peer.on('connection', function(con){
            console.log("check connection : "+con.id);
            console.log("check connection :");
            console.log("this connection ",con);
            con.on('data', function(data){
                console.log("check data :");
                console.log('Incoming data is ', data);
                con.send('REPLY');
            });
        });


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>