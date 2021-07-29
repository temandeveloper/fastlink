$("#copylink").click(function(){
    copytest();
});

$('#buatlink').click(function(){
    let textlink = $("#InputLink").val();
    let taglink = $("#InputTag").val();
    $.ajax({
        url     : "http://dev.mywebsite.yii/checklink",
        type    : "post",
        dataType: "json",
        data    : {
            taglink  : taglink,
        },
        success: function (result) {
            if(result == 1){
                $.ajax({
                    url     : "http://dev.mywebsite.yii/createlink",
                    type    : "post",
                    dataType: "json",
                    data    : {
                        textlink    : textlink,
                        taglink     : taglink,
                    },
                    success: function (result) {
                        $("#outputLink").val("http://dev.mywebsite.yii/"+taglink);
                        $("#hasilshortlink").slideDown("slow");
                    }
                });
            }else{
                alert("Tag link sudah digunakan!");
            }
        }
    }); 
});

copytest = () => {
    /* Get the text field */
    var copyText = document.getElementById("outputLink");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    alert("Shortlink Berhasil di copy");
}
