<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>\asset\bootstrap\css\bootstrap.min.css">
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    html {
        font-family: "Montserrat";
        font-size: 20px;
    }
    section {
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: flex-start;
        background-color: rgb(37, 37, 37);
        flex-direction: column;
        padding: 50px 0;
    }
    section h1 {
        color: rgba(255, 255, 255, 0.322);
        text-align: center;
        width: 100%;
        font-size: 50px;
        margin-bottom: 10px;
    }
    section p {
        text-align: center;
        color: rgba(255, 255, 255, 0.322);
        width: 100%;
        margin-bottom: 40px;
    }
    .container {
        width: 90%;
        max-width: 500px;
        margin: 0 auto;
        justify-content: center;
    }
    .texts p {
        color: black;
        text-align: left;
        width: 100%;
        background-color: white;
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .texts p.replay {
        text-align: right;
    }
</style>
<body>
    <section>
    <h1>Live Speech <br>Translator [LST]</h1>
    <p>Experimantal 😎 Mode</p>
    <div class="container">
        <label for="basic-url" style="color:white">Input Language Code</label>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Speech</span>
            </div>
            <input type="text" id="speech" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Translator</span>
            </div>
            <input type="text" class="form-control" id="source" placeholder="Source" disabled>
            <input type="text" class="form-control" id="target" placeholder="Target">
        </div>
        <label for="formControlRange" style="color:white">Voice</label>
        <select id="voice-select" class="form-control form-control-sm"></select>
        <div class="input-group">
            <label for="formControlRange" style="color:white">Rate</label>
            <input type="range" class="form-control-range" id="rate" min="0" max="2" value="1" step="0.1">
        </div>
        <div class="input-group">
            <label for="formControlRange" style="color:white">Pitch</label>
            <input type="range" class="form-control-range" id="pitch" min="0" max="2" value="1" step="0.1">
        </div>
        
        <div class="texts">
        </div>
    </div>
    </section>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
    <script>
        $(document).ready(()=>{
            console.log("jquery active");
        })
        const texts = document.querySelector(".texts");
        let speechcode = "";
        let sourcecode = "";
        let targetcode = "";

        $("#speech").change(()=>{
            speechcode = $("#speech").val();
            $("#source").val(speechcode);
            console.log("speechcode",speechcode);
        });

        $("#source").change(()=>{
            sourcecode = $("#source").val();
            console.log("sourcecode",sourcecode);
        });

        $("#target").change(()=>{
            targetcode = $("#target").val();
            console.log("targetcode",targetcode);
        });

        window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        const recognition = new SpeechRecognition();
        const synth = window.speechSynthesis;

        const textForm = document.querySelector('form');
        const voiceSelect = document.querySelector('#voice-select');
        const rate = document.querySelector('#rate');
        const pitch = document.querySelector('#pitch');

        //Browser identifier
        // Firefox 1.0+
        var isFirefox = typeof InstallTrigger !== 'undefined';

        // Chrome 1+
        var isChrome = !!window.chrome && !!window.chrome.webstore;
        console.log("isFirefox",isFirefox)
        console.log("isChrome",isChrome)

        // Init voices array
        let voices = [];

        const getVoices = () => {
        voices = synth.getVoices();

            // Loop through voices and create an option for each one
            voices.forEach(voice => {
                // Create option element
                const option = document.createElement('option');
                // Fill option with voice and language
                option.textContent = voice.name + '(' + voice.lang + ')';
                // Set needed option attributes
                option.setAttribute('data-lang', voice.lang);
                option.setAttribute('data-name', voice.name);
                voiceSelect.appendChild(option);
            });
        };

        if (synth.onvoiceschanged !== undefined) {
            console.log("onvoiceschanged")
            synth.onvoiceschanged = getVoices;
        }else{
            console.log("getVoices")
            getVoices();
        }


        recognition.lang = speechcode;
        recognition.interimResults = true;
        let p = document.createElement("p");
        recognition.addEventListener("result", (e) => {
            texts.appendChild(p);
            const text = Array.from(e.results).map((result) => result[0]).map((result) => result.transcript).join("");
            p.innerText = text;
            if (e.results[0].isFinal) {
                if (text.includes("system start")) {
                    if(speechcode == "" || sourcecode == "" || targetcode == ""){
                        p = document.createElement("p");
                        p.classList.add("replay");
                        p.innerText = "System LST is Denied, Please make sure your input code";
                        texts.appendChild(p);
                        alert("speechcode : "+speechcode+"; sourcecode : "+sourcecode+"; targetcode : "+targetcode);
                        return false;
                    }else{
                        p = document.createElement("p");
                        p.classList.add("replay");
                        p.innerText = "System LST is Started...";
                        texts.appendChild(p);
                        return false;
                    }
                }

                if (text.includes("show language")) {
                    p = document.createElement("p");
                    p.classList.add("replay");
                    p.innerText = "Your Language is : "+recognition.lang;
                    texts.appendChild(p);
                    return false;
                }

                if (text.includes("set language")) {
                    recognition.lang = $("#speech").val();
                    p = document.createElement("p");
                    p.classList.add("replay");
                    p.innerText = "Language is change to : "+recognition.lang;
                    texts.appendChild(p);
                    return false;
                }

                console.log("get api translate");
                let source = encodeURIComponent(sourcecode);
                let target = encodeURIComponent(targetcode);
                let textto = encodeURIComponent(text);
                
                $.ajax({
                    url : "https://translate.googleapis.com/translate_a/single?client=gtx&dt=t&sl="+source+"&tl="+target+"&q="+textto,
                    type: "get",
                    success : function(result){
                        console.log("result translate",result[0][0][0]);
                        p = document.createElement("p");
                        p.classList.add("replay");
                        p.innerText = result[0][0][0];
                        texts.appendChild(p);

                        // Get speak text
                        const speakText = new SpeechSynthesisUtterance(result[0][0][0]);

                        // Speak end
                        speakText.onend = e => {
                            console.log('Done speaking...');
                        };

                        // Speak error
                        speakText.onerror = e => {
                            console.error('Something went wrong');
                            alert("error : "+e);
                        };

                        // Selected voice
                        const selectedVoice = voiceSelect.selectedOptions[0].getAttribute('data-name');

                        // Loop through voices
                        voices.forEach(voice => {
                            if (voice.name === selectedVoice) {
                                speakText.voice = voice;
                            }
                        });

                        // Set pitch and rate
                        speakText.rate = rate.value;
                        speakText.pitch = pitch.value;
                        // Speak
                        synth.speak(speakText);
                    },
                    error : function(xhr, status, error){
                        console.log("System Translator Failed to Proses");
                        alert("error : "+error);
                    }
                });
            }

        });

        recognition.addEventListener("end", () => {
            recognition.start();
        });

        recognition.start();

    </script>
</body>
</html>