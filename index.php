<!DOCTYPE html>
<html>
    <head>
        <title>Bot</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    </head>
    <body >
        <div class="bot_pane" id="bot_pane">
            <div class="bot_pane-header">
                <table>
                    <tr>
                        <td class="bot_td">
                            <img class="bot_pane-img" src="uploads/bot.jpg"/>
                        </td>
                        <td class="bot_td">Survaro</td>
                        <td class="bot_td-right">
                            <i class="fa fa-times" onclick="hideArea()"></i>
                        </td>
                    </tr>
                </table>
                <span id="error" style="color:red;"></span>
            </div>
            <div class='bot_msg'>Hello.<br/> My name is Survaro. I am here to help you.</div><br/>
            <div class="msg_area" id="msg_area"></div>
            <span class="typing" id="typing"></span>
            <br/>
            <div class="send_area">
                <table>
                    <tr>
                        <td class="msg_td_1">
                            <textarea rows="2" class="form-control form-control-sm" placeholder="Write Message" id="msg"></textarea>
                        </td>
                        <td class="msg_td_2">
                            <div class="send_btn" onclick="sendMsg()">
                                <i class="fa fa-paper-plane"></i>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div><br/>
    <!--<button class="trigger-btn" onclick="showArea()">
        <i class="fa fa-comment trigger-icon"></i>
    </button>
<div class="my_msg"></div>-->
        <!--Scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script> 
        <script src="js/jquery-3.0.0.js"></script> 
        <script src="js/script.js"></script>
    </body>
</html>