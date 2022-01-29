<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        const recognition = new SpeechRecognition();
        recognition.interimResults = true;

        let p = document.createElement("p");
        recognition.addEventListener("result", (e) => {
            texts.appendChild(p);
            const text = Array.from(e.results).map((result) => result[0]).map((result) => result.transcript).join("");
            p.innerText = text;
            if (e.results[0].isFinal) {
                if (text.includes("how are you")) {
                    p = document.createElement("p");
                    p.classList.add("replay");
                    p.innerText = "I am fine";
                    texts.appendChild(p);
                }
                if (text.includes("what's your name") || text.includes("what is your name")) {
                    p = document.createElement("p");
                    p.classList.add("replay");
                    p.innerText = "My Name is Cifar";
                    texts.appendChild(p);
                }

                if (text.includes("open my YouTube")) {
                    p = document.createElement("p");
                    p.classList.add("replay");
                    p.innerText = "opening youtube channel";
                    texts.appendChild(p);
                    console.log("opening youtube");
                    window.open("https://www.youtube.com/channel/UCdxaLo9ALJgXgOUDURRPGiQ");
                }

                console.log("get api translate");
                let source = encodeURIComponent("en");
                let target = encodeURIComponent("id");
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
                        alert(xhr.responseText);
                        console.log("Anomaly has been detected Code 501");
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