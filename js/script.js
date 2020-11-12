function hideArea() {
    $('#bot_pane').fadeOut(1000);
}

function sendMsg() {
    document.getElementById("typing").innerHTML = '<div class="typing"><small>typing</small></div> ';
    var xhttp;
        if (XMLHttpRequest) {
            xhttp = new XMLHttpRequest();
        }
        else {
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        var formdata = new FormData();
        formdata.append("message", document.getElementById("msg").value);
        formdata.append("send_msg", "true");
        formdata.append("dt", new Date().toString());
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("typing").innerHTML = '';
                document.getElementById("msg").value = '';
                document.getElementById("msg_area").innerHTML = this.responseText;
            }
        }
        xhttp.open("POST", "response.php", true);
        xhttp.send(formdata);
 }

 function getMsgs() {
    var xhttp;
        if (XMLHttpRequest) {
            xhttp = new XMLHttpRequest();
        }
        else {
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("msg_area").innerHTML = this.responseText;
            }
        }
        xhttp.open("GET", "response.php?get_chats=true", true);
        xhttp.send();
}