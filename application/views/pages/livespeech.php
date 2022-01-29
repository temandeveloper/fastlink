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
            <input type="text" class="form-control" id="source" placeholder="Source">
            <input type="text" class="form-control" id="target" placeholder="Target">
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
        let speechcode = $("#speech").val();
        let sourcecode = $("#source").val();
        let targetcode = $("#target").val();

        window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        const recognition = new SpeechRecognition();
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
                        return false;
                    }else{
                        p = document.createElement("p");
                        p.classList.add("replay");
                        p.innerText = "System LST is Started...";
                        texts.appendChild(p);
                    }
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
                    },
                    error : function(xhr, status, error){
                        console.log("System Translator Failed to Proses");
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